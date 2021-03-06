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
        $book = DB::table('book')
        // ->join('properties', 'houses.property_id',  '=', 'properties.id')
        ->select('book.*', 'properties.property_name')
        ->select('book.*')
        ->where('book.booking_status',1)
        ->get();

        // $book =DB::select('select * from book ');

        return view('admin.all_reservation',compact('book'));
    }
}
