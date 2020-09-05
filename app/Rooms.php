<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Room_Type;

class Rooms extends Model
{

    protected $primaryKey = 'room_id';

    protected $fillable = [

         'client_id','room_type_id','room_service_name','room_code','room_price','size','capacity','bed','payment_number','payment_account_number','payment_contact_person','status',
    ];
    public function room_type(){
        return $this->hasMany('App\Room_Type');
    }


    }



