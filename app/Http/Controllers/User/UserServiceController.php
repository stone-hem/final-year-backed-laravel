<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class UserServiceController extends Controller
{
    public function index(){
        $service=Service::all();
        $service=Service::join('users','users.id','=','services.user_id')
        ->join('details','details.id','=','services.details_id')
        ->select(
            'details.name as detail_name',
            'details.location',
            'details.phone_number',
            'services.id',
            'services.name',
            'services.description',
            'services.rating',
            'services.picture'
        )
        ->get();
        return view('user.services.index',compact('service'));
    }
}
