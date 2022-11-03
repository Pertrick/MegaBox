<?php

namespace App\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceProviderAction
{
    public function airtime()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
            "service" : "airtime"
        }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
                'Content-Type: application/json',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);
        $airtime = $response["data"];

         return view('airtime', compact('airtime'));
        
    }

    public function mtnData(){
       
      $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "service" : "data",
            "coded" : "m"
        }',
          CURLOPT_HTTPHEADER => array(
            'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $mtnDataList = json_decode($response, true);
        return $mtnDataList;
    }

    
    public function airtelData(){
       
        $curl = curl_init();
  
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
              "service" : "data",
              "coded" : "a"
          }',
            CURLOPT_HTTPHEADER => array(
              'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
              'Content-Type: application/json'
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);
          $airtelDataList = json_decode($response, true);
          return $airtelDataList;
      }


      
    public function etisalatData(){
       
        $curl = curl_init();
  
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
              "service" : "data",
              "coded" : "9"
          }',
            CURLOPT_HTTPHEADER => array(
              'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
              'Content-Type: application/json'
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);
          $etisalatDataList = json_decode($response, true);
          return $etisalatDataList;
      }

      
    public function gloData(){
       
        $curl = curl_init();
  
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://test.mcd.5starcompany.com.ng/api/reseller/list',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
              "service" : "data",
              "coded" : "g"
          }',
            CURLOPT_HTTPHEADER => array(
              'Authorization: mcd_key_fertyuilokmjnhgft56789807675434265fd',
              'Content-Type: application/json'
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);
          $gloDataList = json_decode($response, true);
          return $gloDataList;
      }
}
