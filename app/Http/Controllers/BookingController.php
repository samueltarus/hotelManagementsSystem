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

class BookingController extends Controller
{

    public function all_rooms(){
         $rooms=Rooms::all();
        return view('admin.all_rooms',compact('rooms'));
    }
    public function add_room(){
        // $rooms=Client::all();
         $rooms =DB::select('select client_name ,client_id from Clients ');
         $room_types =DB::select('select room_type_name ,room_type_id from room_types ');
         $room_services =DB::select('select room_services_name  ,service_id from services');
        return view('admin.add_room',compact('rooms','room_types','room_services'));

    }
    public function save_room(Request $request){

        $data =array();

        $data['client_id']=$request->client_id;
        $data['room_type_id']=$request->room_type_id;
        $data['service_id']=$request->service_id;
        $data['room_code']=$request->room_code;
        $data['room_price'] = $request->room_price;
        $data['size']=$request->size;
        $data['capacity']=$request->capacity;
        $data['bed'] = $request->bed;
        $data['size']=$request->size;
        $data['status'] = $request->status;

        DB::table('rooms')->insert($data);


        return Redirect::to('all-rooms');



    }
    public function edit_room($room_id){


        $rooms =DB::select('select client_name ,client_id from Clients ');
         $room_types =DB::select('select room_type_name ,room_type_id from room_types ');
         $room_services =DB::select('select room_services_name  ,service_id from services');
         $rooms =Rooms::find($room_id);

        return view('admin.edit_room_details',compact('rooms','room_types','room_services'));

    }
    public function update_room( Request $request, $room_id){

        $data =array();

        $data['client_id']=$request->client_id;
        $data['room_type_id']=$request->room_type_id;
        $data['service_id']=$request->service_id;
        $data['room_code']=$request->room_code;
        $data['room_price'] = $request->room_price;
        $data['size']=$request->size;
        $data['capacity']=$request->capacity;
        $data['bed'] = $request->bed;
        $data['size']=$request->size;
        $data['status'] = $request->status;

        DB::table('rooms')
            ->where('room_id',$room_id)
            ->update($data);

            return Redirect::to('all-rooms');

    }
  public function  delete_room($room_id){

    Rooms::find($room_id)->delete();
    return Redirect::to('all-rooms');

  }


//   booking customer
public function save_booking(Request $request){

    $data =array();

    $data['customer_phone_number']=$request->customer_phone_number;
    $data['customer_id']=$request->customer_id;
    $data['customer_check_in'] = $request->customer_check_in;
    $data['customer_check_out']=$request->customer_check_out;
    $data['guest']=$request->guest;
    $data['room_id'] = $request->room_id;


    DB::table('booked')->insert($data);

    return Redirect::to('/');

}


// room type

public function add_room_type(){

     $rooms =DB::select('select client_name ,client_id from Clients ');
    return view('admin.add_room_type',compact('rooms'));

}
public function save_room_type(Request $request){

    $data =array();

    $data['client_id']=$request->client_id;
    $data['room_type_name']=$request->room_type_name;
    $data['status'] = $request->status;


    DB::table('room_types')->insert($data);


    return Redirect::to('all-rooms');



}

// service
public function add_room_service(){

    $rooms =DB::select('select client_name ,client_id from Clients ');
   return view('admin.add_services',compact('rooms'));

}
public function save_room_service(Request $request){

   $data =array();

   $data['client_id']=$request->client_id;
   $data['room_services_name']=$request->room_services_name;
   $data['service_description']=$request->service_description;

   $data['status'] = $request->status;


   DB::table('services')->insert($data);


   return Redirect::to('all-rooms');



}



}
