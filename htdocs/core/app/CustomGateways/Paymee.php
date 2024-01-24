<?php

namespace app\CustomGateways;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Xgenious\Paymentgateway\Base\PaymentGatewayBase;
use Xgenious\Paymentgateway\Traits\CurrencySupport;
use Xgenious\Paymentgateway\Traits\PaymentEnvironment;

class Paymee extends PaymentGatewayBase
{

    use PaymentEnvironment,CurrencySupport;

    protected $accountNumber;
    protected $apiToken;
    protected $isTestMode;


    /**
     *
     * @param array $args
     * required param list
     *
     * @return string[]
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @since 0.0.1
     */
    public function ipn_response(array $args = []) : array
    {

        $paymee_order_id = session()->get('paymee_order_id');
        session()->forget('paymee_order_id');

        $url = 'https://paymee.tn/';
        if($this->getIsTestMode()){
            $url = 'https://sandbox.paymee.tn/';
        }
        $headers = array("Authorization: Token {$this->getApiToken()}");
        $curl_handle=curl_init($url.'api/v1/payments/'.$args['payment_token'].'/check');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);

        $query = json_decode(curl_exec($curl_handle),true);
        curl_close($curl_handle);

        if ($query && $query['data']['payment_status']==true) {
            $payment_intent = $args['transaction'];
            $payment_status = 'paid';
        }else {
            $payment_intent = '';
            $payment_status = 'failed';
        }

        if (!empty($payment_status) && $payment_status === 'paid') {
            $transaction_id = $payment_intent;
            if (!empty($transaction_id)) {
                return $this->verified_data([
                    'transaction_id' => $transaction_id,
                    'order_id' => $paymee_order_id
                ]);
            }
        }

        return ['status' => 'failed','order_id' => $paymee_order_id];
    }

    /*
* charge_amount();
* @required param list
* $amount
*
*
* */
    public function charge_amount($amount)
    {
        if (in_array($this->getCurrency(), $this->supported_currency_list())){
            return $amount;
        }
        return $amount;
    }

    /**
     *
     * @param array $args
     * required param list
     *
     * product_name
     * amount
     * description
     * ipn_url
     * cancel_url
     * order_id
     *
     * @return array
     * @throws \Stripe\Exception\ApiErrorException
     * @since 0.0.1
     */
    public function charge_customer(array $args)
    {
		// try{
        if($args['amount'] < 1){
            abort(500,__('minimum payable amount is 1'));
        }
        $headers = array("Authorization: Token {$this->getApiToken()}");
        session()->put('paymee_order_id', $args['order_id']);
        $curl_post_data = array(
            'vendor' => $this->getAccountNumber(),
            'amount' => $args['amount'],
            'note' => "Commande AU #{$args['order_id']}",
            'returnUrl' => $args['ipn_url'],
            'cancelUrl' => $args['cancel_url'],
            'webhookUrl' => $args['ipn_url'],
        );

        $url = 'https://app.paymee.tn/api/v1/payments/create';
        $gateway_url = 'https://app.paymee.tn/gateway/';
        if($this->getIsTestMode()){
            $url = 'https://sandbox.paymee.tn/api/v1/payments/create';
            $gateway_url = 'https://sandbox.paymee.tn/gateway/';
        }
        $curl_handle=curl_init($url);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl_handle, CURLOPT_POST, true);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $curl_post_data);

        $query = json_decode(curl_exec($curl_handle),true);
        curl_close($curl_handle);
		// dd($query, $headers, $curl_post_data, $gateway_url, $url);

        $params['url_ok']           = $curl_post_data['returnUrl'];
        $params['url_ko']           = $curl_post_data['cancelUrl'];
        $params['payment_token']    = $query['data']['token'];
		// }catch(\Throwable $th){
			// dd($th);
		// }

//        $paymee_arg_array = array();
//        foreach ($params as $key => $value) {
//            $paymee_arg_array[] = '<input type="hidden" name="'.$key.'" value="'.$value.'" />';
//        }

       // dd($query, $url, $this->getApiToken(), $args);
        return $this->paymee_view($params, $gateway_url);
    }
    public function paymee_view($args, $gateway_url){
        return view('payment.paymee', ['paymee_data' => $args, 'gateway_url' => $gateway_url]);
    }

    /**
     * this will refund payment gateway charge currency
     * @since 0.0.1
     * */
    public function supported_currency_list() : array
    {
        return [
            'USD',
            'EUR',
            'INR',
            'IDR',
            'AUD',
            'SGD',
            'JPY',
            'GBP',
            'MYR',
            'PHP',
            'THB',
            'KRW',
            'NGN',
            'GHS',
            'BRL',
            'BIF',
            'CAD',
            'CDF',
            'CVE',
            'GHP',
            'GMD',
            'GNF',
            'KES',
            'LRD',
            'MWK',
            'MZN',
            'RWF',
            'SLL',
            'STD',
            'TZS',
            'UGX',
            'XAF',
            'XOF',
            'ZMK',
            'ZMW',
            'ZWD',
            'AED',
            'AFN',
            'ALL',
            'AMD',
            'ANG',
            'AOA',
            'ARS',
            'AWG',
            'AZN',
            'BAM',
            'BBD',
            'BDT',
            'BGN',
            'BMD',
            'BND',
            'BOB',
            'BSD',
            'BWP',
            'BZD',
            'CHF',
            'CNY',
            'CLP',
            'COP',
            'CRC',
            'CZK',
            'DJF',
            'DKK',
            'DOP',
            'DZD',
            'EGP',
            'ETB',
            'FJD',
            'FKP',
            'GEL',
            'GIP',
            'GTQ',
            'GYD',
            'HKD',
            'HNL',
            'HRK',
            'HTG',
            'HUF',
            'ILS',
            'ISK',
            'JMD',
            'KGS',
            'KHR',
            'KMF',
            'KYD',
            'KZT',
            'LAK',
            'LBP',
            'LKR',
            'LSL',
            'MAD',
            'MDL',
            'MGA',
            'MKD',
            'MMK',
            'MNT',
            'MOP',
            'MRO',
            'MUR',
            'MVR',
            'MXN',
            'NAD',
            'NIO',
            'NOK',
            'NPR',
            'NZD',
            'PAB',
            'PEN',
            'PGK',
            'PKR',
            'PLN',
            'PYG',
            'QAR',
            'RON',
            'RSD',
            'RUB',
            'SAR',
            'SBD',
            'SCR',
            'SEK',
            'SHP',
            'SOS',
            'SRD',
            'SZL',
            'TJS',
            'TRY',
            'TTD',
            'TWD',
            'UAH',
            'UYU',
            'UZS',
            'VND',
            'VUV',
            'WST',
            'XCD',
            'XPF',
            'YER',
            'TND',
            'ZAR'
        ];
    }
    /**
     * this will refund payment gateway charge currency
     * */
    public function charge_currency()
    {
        return $this->getCurrency();
    }
    /**
     * this will refund payment gateway name
     * */
    public function gateway_name() : string
    {
        return 'Paymee';
    }

    /**
     * @return mixed
     */
    private function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param mixed $accountNumber
     */
    public function setAccountNumber($accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return mixed
     */
    private function getApiToken()
    {
        return $this->apiToken;
    }

    /**
     * @param mixed $apiToken
     */
    public function setApiToken($apiToken): void
    {
        $this->apiToken = $apiToken;
    }

	 /**
     * @return mixed
     */
    private function getIsTestMode()
    {
        return $this->isTestMode;
    }

    /**
     * @param mixed $apiToken
     */
    public function setIsTestMode($apiMode): void
    {
        $this->isTestMode = $apiMode;
    }
}
