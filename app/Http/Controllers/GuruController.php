<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function myinbox(){
        return view('guru/guru-myinbox', [
            'title' => 'My Inbox Order'
        ]);
    }

    public function addclass(){
        return view('guru/guru-addclass', [
            'title' => 'Add a New Class'
        ]);
    }

    public function setting(){
        return view('guru/setting-guru', [
            'title' => 'Setting Profile'
        ]);
    }
}
