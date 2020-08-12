<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{


    protected $primaryKey = 'client_id';
    protected $dates = ['deleted_at'];
    protected $softDelete = true;

    protected $fillable = [
        'client_name','no_of_rooms', 'email', 'kra_pin','address',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
