<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Communicate\ICommunicateService;
use App\Entity\Country;
use App\Entity\Number;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Config;

class MainController extends Controller 
{

    /**
     * Show the main page.
     *
     * @param  Request $request
     * @return View
     */
    public function index(
        Request $request, 
        ICommunicateService $communicateService
    )
    {
        $number = false;
        
        if($request->has('country')) {
            $country = Country::with('Numbers')
                ->find($request->input('country'));
            if(!($country->Numbers && $country->Numbers->number)) {
                $twilioNumber = $communicateService->newNumber($country->iso);
                if($twilioNumber instanceof Services_Twilio_Rest_IncomingPhoneNumber) {
                    $countryNumber = Number::create([
                        'number' => $twilioNumber->phone_number,
                        'sid' => $twilioNumber->sid,
                        'country_id' => $country->id
                    ]);
                    $number = $countryNumber->number;
                } else {
                    $number = 'Can\'t get number';
                }
            }
            $number = $country->Numbers ? 
                $country->Numbers->number : $number;
        }
        
        return view('main', [
            'countries' => Country::all()->toArray(),
            'pathToFlags' => config('app.pathToImages'),
            'number' => $number,
        ]);
    }
}

