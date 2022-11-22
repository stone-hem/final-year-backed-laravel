<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmDashboardController extends Controller
{
    public function index(){
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
}
