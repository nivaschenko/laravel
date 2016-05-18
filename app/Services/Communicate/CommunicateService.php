<?php
namespace App\Services\Communicate;

use App\Services\Communicate\ICommunicateService;
use Services_Twilio_Twiml;
use Services_Twilio;
use Services_Twilio_RestException;
use Log;

class CommunicateService implements ICommunicateService
{
    private $client;
    
    private $twilioML;

    public function __construct(Services_Twilio_Twiml $twilioML, Services_Twilio $client) {
        $this->twilioML = $twilioML;
        $this->client = $client;
//        $this->client = $this->app->make(Services_Twilio::class);
    }

    
    public function newNumber($iso, $type = 'Local', $params = [])
    {
        $numbers = $this
            ->getAvailablePhoneNumbers($iso, $type = 'Local', $params = []);
        
        if(is_array($numbers)) {
            return $this->createPhoneNumber($numbers[0]->phone_number);
        }
        return false;
    }
    
    public function dialXml($number)
    {
        $twiml = $this->twilioML;
        return $twiml->response($twiml->dial($number, ['timeout' => '10']));
    }


    private function getAvailablePhoneNumbers($iso, $type = 'Local', $params = [])
    {
        try {
            $result = $this->client->account
                ->available_phone_numbers->getList($iso, $type, $params);
        } catch (Services_Twilio_RestException $ex) {
            Log::error($ex->getMessage());
            return false;
        }
        return $result->available_phone_numbers;
    }
    
    private function createPhoneNumber($number)
    {
        try {
            $result = $this->client->account->incoming_phone_numbers->create([
                "FriendlyName" => "laravel",
                "VoiceUrl" => route('dial'),
                "PhoneNumber" => $number,
                "VoiceMethod" => "POST"
            ]);
        } catch (Services_Twilio_RestException $ex) {
            Log::error($ex->getMessage());
            return false;
        }
        
        return $result;
    }
    
    private function setClient($client)
    {
        $this->client = $client;
        
        return $this;
    }
}

