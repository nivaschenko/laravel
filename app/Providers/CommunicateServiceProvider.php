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
        
        App::bind(Services_Twilio::class, function ($app) {
            $twilioConfig = Config::get('twilio');
            $twilioConfig = $twilioConfig['drivers'][CommunicateService::class];
        var_dump($twilioConfig);
        exit;
            return new Services_Twilio($twilioConfig['sid'], $twilioConfig['token']);
        });

        App::bind(Services_Twilio_Twiml::class, function ($app) {
            return new Services_Twilio_Twiml();
        });
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
