<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmDetailController extends Controller
{
    public function index(){
        $details=Detail::where('user_id',Auth::user()->id)->first();
        return view('firm.details.index',compact('details'));
    }
    public function create(){
        $details=Detail::where('user_id',Auth::user()->id)->first();
        return view('firm.details.add',compact('details'));
    }
}
