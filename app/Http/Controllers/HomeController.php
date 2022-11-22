<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Service;
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
            $sum_services=Service::where('user_id',Auth::user()->id)->count();
            $sum_cart=Cart::where('user_id',Auth::user()->id)->where('is_complete',1)->count();
            $sum_books=Cart::where('user_id',Auth::user()->id)->count();
            return view('firm.dashboard',
            compact(
                'sum_services',
                'sum_cart',
                'sum_books'
            ));
        }
        elseif ($role=='2') {

            $sum_services=Service::where('user_id',Auth::user()->id)->count();
            $sum_cart=Cart::where('user_id',Auth::user()->id)->where('is_complete',1)->count();
            $sum_books=Cart::where('user_id',Auth::user()->id)->count();
            return view('technician.dashboard',
            compact(
                'sum_services',
                'sum_cart',
                'sum_books'
            )
        );
        
        }
        elseif ($role=='3') {
            return view('user.dashboard');
        }

    }
}
