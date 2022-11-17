<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Airtime;
USE App\Models\Data;

class Payment extends Model
{
    use HasFactory;

    const AIRTIME = "airtime";
    const DATA ="data";
    const PENDING = "pending";
    const SUCCESS = "success";


    public function savePayment($user,$email,$service, $reference, $naira, $amount){
        $this->user = $user;
        $this->email = $email;
        $this->service  = $service;
        $this->reference_id = $reference;
        $this->currency = $naira;
        $this->amount = $amount;
        
        $this->save();

    }
}
