<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Instant;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Support\Facades\Auth;

class FirmInstantController extends Controller
{
    public function index(){
        $detail=Detail::join('users','users.id','=','details.user_id')
        ->where('details.user_id',Auth::user()->id)
        ->select('details.id')
        ->first();
        $instant=Instant::join('details','details.id','=','instants.firm_or_technician')
        ->join('users','users.id','=','instants.user_id')
        ->where('instants.firm_or_technician',$detail->id)
        ->where('instants.is_approve',0)
        ->select(
            'users.name as username',
            'details.name',
            'instants.id',
            'instants.created_at',
            'instants.title',
            'instants.description',
            'instants.user_current_location'
        )
        ->get();

        return view('firm.instant.instant',compact('instant'));
    }
    public function accept($id){
        $instant=Instant::where('id',$id)->first();

        $instant->is_approve=1;
        $instant->save();
          Vonage::message()->send([
            'to'=>'254743621073',
            'from'=>'254718776401',
            'text'=>"Service Verified , we value you, we will reach you in 20 mins"
        ]);
        return back();
    }

    public function reject($id){
        $instant=Instant::where('id',$id)->first();
        $instant->delete();
          Vonage::message()->send([
            'to'=>'254743621073',
            'from'=>'254718776401',
            'text'=>"Service Verified , we value you, we will reach you in 20 mins"
        ]);
        return back();
    }
    
}
