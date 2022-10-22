<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserServiceController extends Controller
{
    public function index(){
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

    public function create($id){
        $service=Service::join('details','details.id','=','services.details_id')
        ->where('services.id',$id)
        ->select(
            'details.name as firm',
            'details.location',
            'details.phone_number',
            'services.id',
            'services.name',
            'services.description',
            'services.rating',
            'services.picture'
        )
        ->first();

        return view('user.services.detail',compact('service'));
    }

    public function store($id){
        $service=Service::find($id);
        $cart=new Cart();

        $cart->name=$service->name;
        $cart->user_id=Auth::user()->id;
        $cart->service_id=$service->id;
        $cart->details_id=$service->details_id;
    }
}
