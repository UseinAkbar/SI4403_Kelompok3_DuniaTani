<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myclass(){
        return view('user/user-myclass', [
            'title' => 'Class User'
        ]);
    }

    public function myorder(){
        return view('user/user-myorder', [
            'title' => 'Order User'
        ]);
    }

    public function setting(){
        return view('user/setting-user', [
            'title' => 'Setting Profile'
        ]);
    }
}
