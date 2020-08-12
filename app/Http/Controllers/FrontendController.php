<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{
    public function frontend_index(){
        $rooms =DB::select('select room_code ,room_id from rooms ');
        return view('frontend.frontend_index',compact('rooms'));
    }
    public function frontend_rooms(){
        $rooms = DB::table('rooms')
        ->join('room_types', 'rooms.room_type_id',  '=', 'room_types.room_type_id')
        ->join('services', 'rooms.service_id',  '=', 'services.service_id')
        ->select('rooms.*', 'room_types.room_type_name','services.room_services_name')
        ->get();

        // $rooms=Rooms::all();
        return view('frontend.frontend_rooms',compact('rooms'));

    }
    public function frontend_about(){
        return view('frontend.frontend_about');

    }
    public function frontend_gallery(){
        return view('frontend.frontend_gallery');

    }
    public function frontend_reservation(){
        return view('frontend.frontend_reservation');

    }
    public function frontend_room_details($room_id){


        $rooms = DB::table('rooms')
        ->join('room_types', 'rooms.room_type_id',  '=', 'room_types.room_type_id')
        ->join('services', 'rooms.service_id',  '=', 'services.service_id')
        ->select('rooms.*', 'room_types.room_type_name','services.room_services_name')
        ->get();

          $rooms =Rooms::find($room_id);
        return view('frontend.frontend_room_details',compact('rooms','room_id'));

    }





}
