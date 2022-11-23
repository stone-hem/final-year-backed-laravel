<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiServiceController extends Controller
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
            'services.value',
            'services.description',
            'services.rating',
            'services.picture'
        )
        ->take(2)->get();
        return response()->json(["services"=>$service]);
    }

    public function create($id){
        $service=Service::join('details','details.id','=','services.details_id')
        ->where('services.id',$id)
        ->select(
            'details.name as firm',
            'details.location',
            'details.phone_number',
            'details.description as firm_description',
            'services.id',
            'services.name',
            'services.value',
            'services.description',
            'services.rating',
            'services.picture'
        )
        ->first();

        return response()->json([
            "service"=>$service
        ]);
    }

    public function store($id){
        $service=Service::find($id);

        if(!$service){
            return response()->json([
                'message'=>"No service found"
            ]);
        }

        $cart=new Cart();

        $cart->name=$service->name;
        $cart->user_id=1;
        $cart->service_id=$service->id;
        $cart->details_id=$service->details_id;

        $result=$cart->save();

        if ($result) {
            return response()->json([
                'message'=>"Service ordered successfully"
            ]);
        }
        else{
            return response()->json([
                'error'=>"Service not ordered successfully"
            ]);
        }
       
    }

    public function view($id){
        $cart=Cart::join('services','services.id','=','carts.service_id')
        ->join('details','details.id','=','carts.details_id')
        ->select(
            'carts.created_at',
            'details.name as firm',
            'details.location',
            'details.phone_number',
            'services.id',
            'services.name',
            'services.value',
            'services.description',
            'services.rating',
            'services.picture'
        )
        ->get();
        return response()->json(["cart"=>$cart]);
    }
}
