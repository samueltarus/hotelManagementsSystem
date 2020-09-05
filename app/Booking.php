<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // protected $fillable = [
    //     'client_id','service_id', 'bookin_item', 'booking_quantity','booking_unit_price','booking_total_price','booking_vat','booking_paid_status',
    // ];

    protected $table='book';
    protected $fillable = [
        'customer_phone_number','customer_id','customer_check_in', 'customer_check_out', 'guest', 'room_id',

    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
