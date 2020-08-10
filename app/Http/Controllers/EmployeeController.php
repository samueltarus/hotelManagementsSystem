<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function all_employees(){
        return view('admin.all_employees');
    }
    public function employee_leave(){
        return view('admin.employee_leave');

    }
    public function employee_holiday(){
        return view('admin.employee_holiday');

    }
    public function employee_attendance(){
        return view('admin.employee_attendance');

    }

    //add routes
    public function add_employee(){
        return view('admin.add_employee');

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
