<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Detail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Support\Facades\Auth;

class FirmCartController extends Controller
{
    public function index(){
        $detail=Detail::join('users','users.id','=','details.user_id')
        ->where('details.user_id',Auth::user()->id)
        ->select('details.id')
        ->first();
       

        $cart=Cart::join('users','users.id','=','carts.user_id')
        ->join('details','details.id','=','carts.details_id')
        ->join('services','services.id','=','carts.service_id')
        ->where('carts.details_id',$detail->id)
        ->where('carts.is_complete',0)
        ->select(
            'carts.id',
            'details.name as details_name',
            'services.name',
            'services.description',
            'services.rating',
            'users.name as username',
            'users.email',
            'users.location',
            'users.phone_number',
            'users.id_number',
            'users.gender'
        )
        ->get();

        return view('firm.cart.index',compact('cart'));
    }

    public function pending($id){
        $firm=Detail::where('user_id',Auth::user()->id)->first();
        $cart=Cart::find($id);

        $cart->is_complete=1;
        // Vonage::message()->send([
        //     'to'=>'254743621073',
        //     'from'=>'254718776401',
        //     'text'=>"Service Verified, $firm->name , we value you, we will reach you in 20 mins"
        // ]);

        if($cart->save()){
            return back();
        }
    }
}
