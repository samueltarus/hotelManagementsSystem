<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $primaryKey = 'employee_id';

    protected $fillable = [
         'client_id','first_name','last_name','email','phone_number','id_card','employee_profile_d','address','email','kra_pin','nssf_pin','certificate_of_good_conduct','status','status',
    ];

}













