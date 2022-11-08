<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'data'
    ];

    public function saveAirtime($airtime,$email, $paymentId){
        $this->phone_number = $airtime['phone_number'];
        $this->network = $airtime['service'];
        $this->amount = $airtime['amount'];
        $this->status = false;
        $this->payment_id = $paymentId;
        $this->uploaded_by = $email;

        $this->save();

}
}
