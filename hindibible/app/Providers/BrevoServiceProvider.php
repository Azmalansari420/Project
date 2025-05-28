<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Configuration;

class BrevoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TransactionalEmailsApi::class, function ($app) {
            $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
            return new TransactionalEmailsApi(null, $config);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
