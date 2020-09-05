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
use Illuminate\Support\Facades\Mail;
use App\Mail\welcome;

class CustomerController extends Controller
{
    public function all_customers(){

        $customers =DB::select('select * from customers ');

        return view('admin.all_customers',compact('customers'));
    }
    public function add_customer(){

        return view('admin.add_customer');
    }
    public function  save_customer(Request $request ){
        $data =array();


        $data['first_name']=$request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email']=$request->email;
        $data['phone_number']=$request->phone_number;
        $data['id_card'] = $request->id_card;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['county'] = $request->county;
        $data['driving_license']=$request->driving_license;



        DB::table('customers')->insert($data);

        return Redirect::to('all-customers');
    }

    public $customer_name;
    //mail
    public function send_welcome_customer(){

        Mail::to('admin@gmail.com')->send(new welcome());

        dd('here');

    }
}
