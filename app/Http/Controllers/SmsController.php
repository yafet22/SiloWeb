<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Jwt\ClientToken;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class SmsController extends Controller
{
    protected $code, $smsVerifcation;

    function __construct()
    {
        $this->smsVerifcation = new \App\User();
    }

    public function store(Request $request)
    {
        $code = rand(1000, 9999); //generate random code
        $request['code'] = $code; //add code in $request body
        $result = $this->smsVerifcation->store($request); //call store method of model
        return $this->sendSms($request,$result); // send and return its response
    }

    public function verifyContact(Request $request)
    {
        $smsVerifcation = 
        $this->smsVerifcation::where('phone_number','=',
        $request->phone_number)
        ->latest() //show the latest if there are multiple
        ->first();
        if($request->code == $smsVerifcation->code)
        {
            $request["status"] = 'verified';
            $smsVerifcation->updateModel($request);
            $msg["message"] = "verified";
            return $msg;
        }
        else
        {
            $msg["message"] = "not verified";
            return $msg;
        }
    }

    public function sendSms($request,$result)
    {
        // $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
        // $authToken = config('app.twilio')['TWILIO_AUTH_TOKEN'];
        // try
        // {
        //     $client = new Client(['auth' => [$accountSid, $authToken]]);
        //     $result2 = $client->post('https://api.twilio.com/2010-04-01/Accounts/'.$accountSid.'/Messages.json',
        //     ['form_params' => [
        //     'Body' => 'CODE: '. $request->code, //set message body
        //     'To' => $request->phone_number,
        //     'From' => '+12056199597' //we get this number from twilio
        //     ]]);
            
        //     return $result;
        // }
        // catch (Exception $e)
        // {
        //     echo "Error: " . $e->getMessage();
        // }

        $userkey = "gtlq0f";
        $passkey = "3fdc9dasia";
        $telepon = $request->phone_number;
        $otp = $request->code;
        // $telepon = "081234567890";
        $message = "Terima Kasih telah mendaftar di SILO, Masukan Kode Verifikasi $otp .";
        $url = "https://reguler.zenziva.net/apps/smsapi.php";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        $results = curl_exec($curlHandle);
        curl_close($curlHandle);
        
        
        return $result;
    }

}
