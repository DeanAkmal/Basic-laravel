<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function user(){
        if(Auth::check()){
            return view('dashboard.user');
        } else {
            return redirect()->route('auth.login')->withErrors([
                'notif' => 'Login terlebih dahulu sebelum askes dashboard'
            ]); // Gantilah 'login' dengan nama route login Anda
        }
    }
    
    public function admin(){
        if(Auth::check()){
            return view('dashboard.admin');
        } else {
            return redirect()->route('auth.login')->withErrors([
                'notif' => 'Login terlebih dahulu sebelum askes dashboard'
            ]); // Gantilah 'login' dengan nama route login Anda
        }

    }
}
