<?php

namespace Arifplugin\Arifpay;
use Arifplugin\Arifpay\Arifpay;


use Illuminate\Support\ServiceProvider;

class ArifpayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/arifpay.php', 'arifpay');

        $this->app->bind('arifpay', function ($app) {
            return new Arifpay(config('arifpay.api_key'));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/arifpay.php' => config_path('arifpay.php'),
        ], 'config');
    }
}
