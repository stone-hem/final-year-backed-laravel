<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function index(){
        $user=User::where('role',3)->paginate(5);
        $technician=Detail::join('users','users.id','=','details.user_id')->where('users.role',2)->get();
        $firm=Detail::join('users','users.id','=','details.user_id')->where('users.role',1)->get();
        $service=Service::paginate(5);
        return view('admin.reports.index',compact('user','technician','firm','service'));
    }
}
