<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airtimes extends Model
{
    use HasFactory;

    protected $table = 'airtime';

    protected $fillable = [
        'phone_number',
        'network',
        'amount',
        'status',
        'type',
        'uploaded_by',
    ];
}
