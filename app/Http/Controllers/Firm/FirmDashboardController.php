<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirmDashboardController extends Controller
{
    public function index(){
        return view('firm.dashboard');
    }
}
