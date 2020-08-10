<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppoitmentController extends Controller
{

    public function all_appointments (){
        return view('admin.all_appointments');
    }
}
