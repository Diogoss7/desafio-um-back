<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'client',
        'date',
        'time',
        'salesperson',
        'description',
        'amount',
        'phone'
    ];

    // protected $casts = [
    //     'date' => 'date',
    //     'time' => 'time',
    //     'amount' => 'decimal:2'
    // ];
}
