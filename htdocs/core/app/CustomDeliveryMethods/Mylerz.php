<?php

namespace App\CustomDeliveryMethods;

use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Http;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Xgenious\Paymentgateway\Base\PaymentGatewayBase;
use Xgenious\Paymentgateway\Traits\CurrencySupport;
use Xgenious\Paymentgateway\Traits\PaymentEnvironment;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;


class Mylerz
{
    const API_URL = 'https://integration.tunisia.mylerz.net';
    private $username;
    private $password;
    private  $token;

    /**
     * @param $username
     * @param $password
     */
    public function __construct()
    {
        $this->username = get_static_option('mylerz_user_name');
        $this->password = get_static_option('mylerz_password');
    }


    public function execute($path, $method = 'GET', $data = [], $asForm = false)
    {
        if($asForm){
            $http = Http::asForm();
        }else{
            $http = Http::withOptions(['verify' => false]);
        }

        if ($this->token) {
            $http = $http->withHeaders([
                'content-type' => 'application/json',
                'Authorization' =>  'bearer '.$this->token
            ]);
        }
        return $http->{strtolower($method)}(self::API_URL . $path, $data);
    }

    public function getToken()
    {
        if($this->token){
            return $this->token;
        }
        $response = $this->execute('/token', 'POST', ['grant_type' => 'password', 'username' => $this->username, 'password' => $this->password], true);
        if ($response->ok()) {
            $this->token = $response->json()['access_token'];
            return $response->json()['access_token'];
        }
        return false;
    }

    /**
     * @param ProductOrder[] $orders
     * @return void
     */
    public function addOrders($orders)
    {
        $statesMapping = array(
            1 => 'TUN',
            2 => 'ARI',
            3 => 'BEN',
            4 => 'MAN',
            5 => 'BIZ',
            6 => 'NAB',
            7 => 'BJA',
            8 => 'JDB',
            9 => 'ZAG',
            10 => 'SLI',
            11 => 'KEF',
            12 => 'SOS',
            13 => 'MNS',
            14 => 'MHD',
            15 => 'KSR',
            16 => 'SBZ',
            17 => 'KRN',
            18 => 'GFS',
            19 => 'SFX',
            20 => 'GBS',
            21 => 'MDN',
            22 => 'TZR',
            23 => 'KBL',
            24 => 'TAN'
        );

        //loading token
        $this->getToken();
        $mylerzOrders = [];
        foreach ($orders as $order) {
            $orderProducts = json_decode($order->order_details, true);
            $description = '';
            foreach ($orderProducts as $orderProduct){
                $description .= $orderProduct['name'].' - '.$orderProduct['qty'].' '.(isset($orderProduct['color_name']) ? ' - '.$orderProduct['color_name'] : '').' '.(isset($orderProduct['size_name']) ? ' - '.$orderProduct['size_name'] : '').'  , ';
            }
            $paymentDetails = json_decode($order->payment_meta, true);
            if(isset($paymentDetails['delivery'], $paymentDetails['delivery']['mylerz'])){
              continue;
            }

            $mylerzOrders[] = [
                "Package_Serial" => $order->id,
                "Description" => $description,
                "Total_Weight" => 1,
                "Service_Type" => "DTD",
                "Service" => "SD",
                "Service_Category" => "Delivery",
                "Payment_Type" => $order->checkout_type == 'cod' ? "COD" : "PP",
                "COD_Value" => $order->total_amount,
                "Special_Notes" => $order->message,
                "Customer_Name" => $order->name,
                "Customer_Email" => $order->email,
                "CustomerAddressZipCode" => $order->zipcode,
                "Customer_ReferenceNumber" => $order->user_id ? "#".$order->user_id : '',
                "Mobile_No" => $order->phone,
                "Street" => $order->address,
//                "City" => $order->city,
                "City" => $order?->getstate?->name,
                "Neighborhood" => $statesMapping[$order?->getstate?->id],
                "Address_Category" => "H",
                "Reference" => "#".$order->id,
                "Reference2" => "",
                "Country" => $order->getcountry->name,
                "Currency" => "TND",
                "Pieces" => [
                    [
                        "pieceNo" => 1,
                        "SpecialNotes" => "",
                    ]
                ],
                "PickupDueDate" => date('Y-m-d H:i:s'),
                "WarehouseName" => "",
            ];
        }
//        dd($mylerzOrders);
//        $response = $this->execute('/api/Orders/AddOrders', 'POST', $mylerzOrders);
        $response = [
            "Value" => [
                "PickupOrderCode" => null,
                "PickupDateTime" => "2023-12-26T00:00:00+01:00",
                "Packages" => [
                    [
                        "packageNo" => 1,
                        "Reference" => "#2",
                        "Reference2" => "",
                        "BarCode" => "63769696085001",
                        "Status" => "Uploaded",
                        "DestinationHubCode" => "TUN",
                        "Pieces" => [
                            [
                                "Barcode" => "63769696085001-01-01"
                            ]
                        ],
                        "ErrorCode" => null,
                        "ErrorMessage" => null
                    ]
                ],
                "ErrorCode" => null,
                "ErrorMessage" => null
            ],
            "CoreValue" => null,
            "IsErrorState" => false,
            "ErrorDescription" => null,
            "ErrorMetadata" => null
        ];
        foreach ($response['Value']['Packages'] as $item){
            $id = str_replace('#', '', $item['Reference']);

            if(empty($item['ErrorCode'])){
                $order = ProductOrder::findOrFail($id);
                $orderDetails = json_decode($order->payment_meta, true);
                $orderDetails['delivery']['mylerz'] = $item;
                $order->payment_meta = json_encode($orderDetails);
                $order->save();
            }
        }
        return true;
    }

    /**
     * @param ProductOrder[] $orders
     * @return void
     */
    public function printOrders($orders)
    {

        //loading token
        $this->getToken();
        $pdfs = [];
        $mergedFileName = 'merged_pdf_'.time().'.pdf';
        $oMerger = PDFMerger::init();
        if(!file_exists(storage_path('tmp'))){
            mkdir(storage_path('tmp'), 0777, true);
        }
        if(!file_exists(storage_path('app/public'))){
            mkdir(storage_path('app/public'), 0777, true);
        }
        foreach ($orders as $order) {

            $paymentDetails = json_decode($order->payment_meta, true);
            if(!isset($paymentDetails['delivery'], $paymentDetails['delivery']['mylerz'])){
              continue;
            }
//            dd(storage_path('tmp'));
            //POST /api/packages/GetAWB
            $result = $this->execute('/api/packages/GetAWB', 'POST', ['barcode' => $paymentDetails['delivery']['mylerz']['BarCode']]);

            $oMerger->addString(base64_decode($result->json()['Value']), 'all');

        }
        $oMerger->merge();
        $oMerger->save(storage_path('app/public').'/'.$mergedFileName);
        return $mergedFileName;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}
