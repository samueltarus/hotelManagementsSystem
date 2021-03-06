<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\str_random;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class ClientsController extends Controller
{
    public function all_clients(){

        $clients=Client::all()->orderBy('asc');
        return view('admin.all_clients',compact('clients'));
    }
    public function add_client(){

        return view('admin.add_client');

    }
    public function save_client(Request $request){

        $data =array();

        $data['client_name']=$request->client_name;
        $data['no_of_rooms']=$request->no_of_rooms;
        $data['email'] = $request->email;
        $data['kra_pin']=$request->kra_pin;
        $data['address']=$request->address;
        $data['phone_number']=$request->phone_number;

        DB::table('clients')->insert($data);
        // Mail::to($data['email'])->send(new BookingMail($data));

        //   return $data;
        // Session::flash('success','thanks for adding review!');

        return Redirect::to('all-clients');



    }
    public function edit_client($client_id){
         $clients =Client::find($client_id);
        return view('admin.edit_client_details',compact('clients'));

    }
    public function update_client(Request $request, $client_id){

        $data =array();

        $data['client_name']=$request->client_name;
        $data['no_of_rooms']=$request->no_of_rooms;
        $data['email'] = $request->email;
        $data['kra_pin']=$request->kra_pin;
        $data['address']=$request->address;
        $data['phone_number']=$request->phone_number;

        DB::table('clients')
            ->where('client_id',$client_id)
            ->update($data);

            return Redirect::to('all-clients');

    }
  public function  delete_client($client_id){

    Client::find($client_id)->delete();
    return Redirect::to('all-clients');

  }


  public function active_client($client_id){

    $Houses= DB::table('clients')
                    ->where('client_id',$client_id)
                    ->update(['client_status'=>0]);

    return Redirect::to('all-clients');

 }

 public function unactive_client($client_id){

    $Houses= DB::table('clients')
                    ->where('client_id',$client_id)
                    ->update(['client_status'=>1]);

    return Redirect::to('all-clients');

 }

}
