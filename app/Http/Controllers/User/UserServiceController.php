<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

        if($cart->save()){
            Alert::success('success',"$service->name ordered successfully, we will get back to you in a moment");
            return redirect('user/services');
        }

       
    }
    public function view(){
        $cart=Cart::join('services','services.id','=','carts.service_id')
        ->join('details','details.id','=','carts.details_id')
        ->where('carts.user_id',Auth::user()->id)
        ->select(
            'carts.created_at',
            'details.name as firm',
            'details.location',
            'details.phone_number',
            'carts.id',
            'services.id as service_id',
            'services.name',
            'services.description',
            'services.rating',
            'services.picture'
        )
        ->get();
        return view('user.services.my-services',compact('cart'));
    }

    public function cancel($id){
        $cancel=Cart::where('id',$id)->first();
        if( $cancel->delete()){
            Alert::success("info","Order has been cancelled successfully");
            return back();
        }
       
    }
}
