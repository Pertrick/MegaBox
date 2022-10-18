<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


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
