<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public function saveData($uploadedData,$email){
         
        $uploadedData = Json_decode($uploadedData);

        $count = count($uploadedData);
        foreach($uploadedData as $value){
            $this->phone_number = $value->phone_number;
            $this->network = $value->network;
            $this->amount = $value->amount;
            $this->status = false;
            $this->uploaded_by = $email;

            if($this->save()){
                $count--;
             
            }


        }
    }
}
