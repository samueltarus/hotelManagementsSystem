<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function all_payments(){
        return view('admin.all_payments');
    }
}
