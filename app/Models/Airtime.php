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
        'type',
        'uploaded_by',
    ];

    public function saveAirtime($airtime,$email, $type){
        $this->phone_number = $airtime['phone_number'];
        $this->network = $airtime['network'];
        $this->amount = $airtime['amount'];
        $this->status = false;
        $this->uploaded_by = $email;

        $this->save();

}
}
