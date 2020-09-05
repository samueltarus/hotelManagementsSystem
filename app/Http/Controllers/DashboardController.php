<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Customer;
use App\User;
use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Redirect;
 use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{


    public  function admin(){

        $Customers= Customer::all();
        $Booking =Booking::all();
        $Clients=Client::all();

        return view('admin.dashboard',compact('Customers','Booking','Clients'));
    }

    public function all_users(){
        // $users = DB::table('users')
        // ->join('roles', 'users.role_id',  '=', 'roles.id')
        // ->select('users.*', 'users.name','roles.name')
        // ->get();
        $users =User::all();

        return view('admin.all_users',compact('users'));
    }



    public function unactive_employee($id){

        $Houses= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>1]);
                        //  Session::put('message','Category Unactive Successfully');
        return Redirect::to('all-users');
        // return view('admin.all_category');
     }

     public function active_admin($id){

        $Houses= DB::table('users')
                        ->where('id',$id)
                        ->update(['role_id'=>0]);
                        // Session::put('message','Category Activated Successfully');
        return Redirect::to('all-users');
        // return view('admin.all_category');
     }
}
