<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public function saveData($uploadedData,$email, $type){
         
        $uploadedData = Json_decode($uploadedData);

        $count = count($uploadedData);
        // $value->phone_number
        foreach($uploadedData as $value){
            $this->phone_number = '09023864356';
            $this->network = 'airtel';
            $this->amount = 1000;
            $this->status = false;
            $this->type = $type;
            $this->uploaded_by = $email;

            if($this->save()){
                $count--;
             
            }


        }
    }
}