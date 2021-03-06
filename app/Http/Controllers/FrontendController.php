<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FrontendController extends Controller
{
    public function frontend_index(){

        $rooms = DB::table('rooms')
        ->join('room_types', 'rooms.room_type_id',  '=', 'room_types.room_type_id')
        ->join('clients', 'rooms.client_id',  '=', 'clients.client_id')
        ->join('services', 'rooms.service_id',  '=', 'services.service_id')
        ->select('rooms.*','room_types.room_type_name','clients.client_name','services.service_name' )
        ->orderBy('room_id','DESC')
        ->get();
        return view('frontend.frontend_index',compact('rooms'));
    }
    public function frontend_rooms(){

        $rooms = DB::table('rooms')
        ->join('room_types', 'rooms.room_type_id',  '=', 'room_types.room_type_id')
        ->join('clients', 'rooms.client_id',  '=', 'clients.client_id')
        ->join('services', 'rooms.service_id',  '=', 'services.service_id')
        ->select('rooms.*','room_types.room_type_name','clients.client_name','services.service_name' )

        ->get();



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
        ->select('rooms.*', 'room_types.room_type_name','services.service_name','services.service_description')
        ->get();
        //  dd($rooms);
        $rooms =Rooms::find($room_id);
        return view('frontend.frontend_room_details',compact('rooms','room_id'));

    }

    public function house_type(){

        $room_type =DB::table('rooms')->select('room_type')->get();
        return view('frontend.frontend_house_type',compact('room_type'));
    }





}
