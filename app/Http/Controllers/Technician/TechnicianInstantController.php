<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Instant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicianInstantController extends Controller
{
    public function index(){
        $detail=Detail::join('users','users.id','=','details.user_id')
        ->where('details.user_id',Auth::user()->id)
        ->select('details.id')
        ->first();
        $instant=Instant::join('details','details.id','=','instants.firm_or_technician')
        ->join('users','users.id','=','instants.user_id')
        ->where('instants.firm_or_technician',$detail->id)
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

        return view('technician.instant.instant',compact('instant'));
    }
    public function accept(){
        return "tech no yet done";
          // Vonage::message()->send([
        //     'to'=>'254743621073',
        //     'from'=>'254718776401',
        //     'text'=>"Service Verified , we value you, we will reach you in 20 mins"
        // ]);
    }

    public function reject(){
        return "tech no yet done";
          // Vonage::message()->send([
        //     'to'=>'254743621073',
        //     'from'=>'254718776401',
        //     'text'=>"Service Verified , we value you, we will reach you in 20 mins"
        // ]);
    }
}
