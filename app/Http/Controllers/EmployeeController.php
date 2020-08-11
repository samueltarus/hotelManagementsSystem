<?php

namespace App\Http\Controllers;
use App\Client;
use App\Employee;
use App\Rooms;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\str_random;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function all_employees(){
        $employee =Employee::all();
        return view('admin.all_employees',compact('employee'));
    }
    public function employee_leave(){
        return view('admin.employee_leave');

    }

    public function employee_attendance(){
        return view('admin.employee_attendance');

    }

    //add routes

    public function add_employee(){
        $rooms =DB::select('select client_name ,client_id from Clients ');
        return view('admin.add_employee',compact('rooms'));

    }

    public function save_employee(Request $request){

        $data =array();

        $data['client_id']=$request->client_id;
        $data['first_name']=$request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email']=$request->email;
        $data['phone_number']=$request->phone_number;
        $data['id_card'] = $request->id_card;
        $data['address']=$request->address;
        $data['kra_pin']=$request->kra_pin;
        $data['nssf_pin'] = $request->nssf_pin;
        $data['certificate_of_good_conduct']=$request->certificate_of_good_conduct;
        $data['status'] = $request->status;


        DB::table('employees')->insert($data);

        return Redirect::to('all-employees');


    }


    public function add_attendance(){
        return view('admin.add_attendance');

    }
    public function add_holiday(){
        return view('admin.add_holiday');

    }
    public function add_leave(){
        return view('admin.add_leave');

    }

    // guest
    public function all_guest(){
        
        return view('admin.all_guest');

    }
    public function checkin_guest(){

        return view('admin.checkin_guest');

    }
    public function checkout_guest(){

        return view('admin.checkout_guest');

    }


}
