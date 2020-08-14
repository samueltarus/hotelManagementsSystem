<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public  function admin(){

        return view('admin.dashboard');
    }

    public function all_users(){
        $users =User::all();

        return view('admin.all_users',compact('users'));
    }
}
