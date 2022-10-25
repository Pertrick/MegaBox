<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'network',
        'amount',
        'status',
        'uploaded_by',
    ];

    public function saveAirtime($airtime,$email, $type){
        dd($airtime['phone']);
        $this->phone_number = $airtime['phone'];
        $this->network = $airtime['network'];
        $this->amount = $airtime['amount'];
        $this->status = false;
        $this->uploaded_by = $email;

        $this->save();

}
}
