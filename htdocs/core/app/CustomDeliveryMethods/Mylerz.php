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
        //loading token
        $this->getToken();
        $mylerzOrders = [];
        foreach ($orders as $order) {
            $orderProducts = json_decode($order->order_details, true);
            $description = '';
            foreach ($orderProducts as $orderProduct){
                $description .= $orderProduct['name'].' - '.$orderProduct['qty'].' '.(isset($orderProduct['color_name']) ? ' - '.$orderProduct['color_name'] : '').' '.(isset($orderProduct['size_name']) ? ' - '.$orderProduct['size_name'] : '').'  , ';
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
                "City" => 'Tunis',
//                "City" => $order?->getstate?->name,
                "Neighborhood" => $order->city,
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
        $response = $this->execute('/api/Orders/AddOrders', 'POST', $mylerzOrders);
        dd($response->json());
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
