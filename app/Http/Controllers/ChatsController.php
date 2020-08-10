<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function all_chats (){
        return view('admin.all_chats');
    }
}
