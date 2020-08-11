<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    protected $primaryKey = 'room_id';

    protected $fillable = [

         'client_id','room_type_id','room_service_name','room_code','room_price','size','capacity','bed','status'
    ];
    }
