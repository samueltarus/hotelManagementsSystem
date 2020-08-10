<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function all_vouchers (){
        return view('admin.all_vouchers');
    }
}
