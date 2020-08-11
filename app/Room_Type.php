<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{

    protected $primaryKey = 'room_type_id';

    protected $fillable = [
         'client_id','rom_type_name','status',
    ];
}
