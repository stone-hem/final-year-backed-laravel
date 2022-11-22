<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class UserInstantController extends Controller
{
    public function index(){
        $details=Detail::all();
        return view('user.instant.index',compact('details'));
    }
    public function description($id){
        $details=Detail::where('id',$id)->first();
        return view('user.instant.desc',compact('details'));
    }
}
