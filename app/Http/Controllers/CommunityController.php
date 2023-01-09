<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function displayCommunity(){
        return view('community', [
            'title' => 'Community'
        ]);
    }
}
