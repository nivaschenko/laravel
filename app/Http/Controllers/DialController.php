<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\Communicate\ICommunicateService;
use App\Entity\ConnectLogger;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Config;

class DialController extends Controller 
{
    public function index(
        Request $request, 
        ICommunicateService $communicateService
    )
    {
        if( !$request->has('CallSid') 
            || !$request->has('From')
            || !$request->has('To')) {
            abort(400);
        }
        ConnectLogger::create([
            'sid' => $request->input('CallSid'),
            'from' => $request->input('From'),
            'to' => $request->input('To'),
            'visitor' => config('services.twilio.DIAL_CALLER'),
            'type' => ConnectLogger::TYPE_VOICE
        ]);
        
        $xml = $communicateService
            ->dialXml(config('services.twilio.DIAL_CALLER'));

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
