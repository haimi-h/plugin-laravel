<?php

namespace Arifplugin\Arifpay;

use Arifplugin\Arifpay\Lib\Core\ArifpayCheckout;
//use Arifpay\Arifpay\Lib\Core\ArifpayDirectPay;
use GuzzleHttp\Client;

class ArifPay
{
   
    public $http_client;
    public $apikey;

    public $DEFAULT_HOST = 'https://gateway.arifpay.org'; 
    public const API_VERSION = '';
    public static $PACKAGE_VERSION = '1.2.5';
    public $DEFAULT_TIMEOUT = 1000 * 60 * 2;
    public $checkout;
    public $directPay;

    public function __construct()
    {
        $this->apikey =  env('ARIFPAY_API_KEY');
        $this->http_client = new Client([
            'base_uri' => $this->DEFAULT_HOST,
            'headers' => [
                'x-arifpay-key' => $this->apikey,
                "Content-Type" => "application/json",
                "Accepts" => "application/json",
            ],
        ]);
        $this->checkout = new ArifpayCheckout($this->http_client);
    
        
        
        // $this->directPay = new ArifpayDirectPay($this->http_client);
    }
}
