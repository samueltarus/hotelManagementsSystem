<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'client_name','no_of_rooms', 'email', 'kra_pin','address',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
