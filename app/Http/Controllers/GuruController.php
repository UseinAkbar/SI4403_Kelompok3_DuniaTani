<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    // login guru
    public function loginGuru(){
        return view('guru/login-guru', [
            'title' => 'Login Guru Tani'
        ]);
    }
    // public function authenticate(Request $request){
    //     $credentials= $request->validate([
    //         'username'=>'required',
    //         'password'=>'required'
    //     ]);

    //     if(Auth::guard('gurutani')->attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended('/');
    //     }

    //     return back()->with('loginError', 'Login gagal, gan!'); 
    // }

    // public function logout(){
    //     Auth::logout();

    //     request()->session()->invalidate();
    //     request()->session()->regenerateToken();
    //     // withOutCookie()
    //     return redirect('/');
    // }
    // login guru
}