<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Communicate\ICommunicateService;
use App\Services\Communicate\CommunicateService;

class CommunicateServiceProvider extends ServiceProvider
{
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\Communicate\ICommunicateService', 
            'App\Services\Communicate\CommunicateService'
        );
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Services\Communicate\ICommunicateService'];
    }
}
