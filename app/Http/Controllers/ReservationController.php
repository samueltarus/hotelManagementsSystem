<?php

namespace App\Http\Controllers;

use App\Client;
use App\Rooms;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\str_random;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function all_reservations(){

        $booked =DB::select('select * from booked ');

        return view('admin.all_reservation',compact('booked'));
    }
}
