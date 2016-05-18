<?php
use App\Services\Communicate\ICommunicateService;
use App\Services\Communicate\CommunicateService;

$twilioConfig = Config::get('twilio');

$communicateService = $twilioConfig['default'];

App::bind(CommunicateService::class, $communicateService);

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