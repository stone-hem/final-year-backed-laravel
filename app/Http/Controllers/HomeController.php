<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $role=Auth::user()->role;

        if($role=='0'){
            return view('admin.dashboard');
        }
        elseif ($role=='1') {
            return view('firm.dashboard');
        }
        elseif ($role=='2') {
            return view('technician.dashboard');
        }
        elseif ($role=='3') {
            return view('user.dashboard');
        }

    }
}
