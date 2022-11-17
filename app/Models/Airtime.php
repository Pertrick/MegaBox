<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class Airtime extends Model
{
    use HasFactory;

    const PENDING = 0;
    const SENT = 1;

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


    public function getSuccessfulAirtimePaymentAttribute(){
     return  DB::table('airtimes')
        ->join('payments', 'payments.id', '=', 'airtimes.payment_id')
        ->where('payments.status', '=', 'success')
        ->where('payments.service', '=', 'airtime')
        ->where('airtimes.status', '=', Airtime::PENDING)
        ->select('airtimes.id', 'airtimes.phone_number','airtimes.network','airtimes.amount')
        ->get();

    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}
