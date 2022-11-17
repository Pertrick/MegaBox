<?php

namespace App\Actions;
use App\Models\Airtime;
use App\Models\Payment;
use Carbon\Carbon;

class PurchaseAirtime
{

    public function buyAirtime($airtimes)
    {   
        foreach($airtimes as $airtime){
            $id = $airtime->id;
            $coded = $this->coded($airtime->network);
            $phone_number = $airtime->phone_number;
            $amount = $airtime->amount;

            $curl = curl_init();
  
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/pay',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>'{
                "service":"airtime",
                "coded": "' .$coded .'",
                "phone": "' . $phone_number .'",
                "amount": "' . $amount .'"
            }',
              CURLOPT_HTTPHEADER => array(
                'Authorization: ' . env('MCD_PAYMENT_KEY'). '',
                'Content-Type: application/json'
              ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
    
            $response = json_decode($response, true);

            if($response['success'] == 1){
               $airtime = Airtime::where('id',$id)->first();
               $airtime->status = Airtime::SENT;
               $airtime->sent_at = Carbon::now();
               $airtime->save();
            }
        }

        return true;
      
    }

    public function coded($network)
    {
       switch($network){
        case "MTN" : 
            $network = "m";
            break;
        case "AIRTEL" : 
            $network = "a";
            break;
        case "9MOBILE" : 
            $network = "9";
            break;
        case "GLO" : 
            $network = "g";
            break;
       } 

       return $network;

    }

}
