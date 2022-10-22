<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Service;

class UserFirmController extends Controller
{
    public function index()
    {
        $firm = Detail::join('users', 'users.id', '=', 'details.user_id')
            ->select(
                'details.id',
                'details.name',
                'details.description', 
                'details.org_pic',
                'details.phone_number', 
                'users.name as owner', 
                'users.email'
                )
                ->where('users.role',1)
            ->get();
        return view('user.firms.index', compact('firm'));
    }
    public function firm($id){
        $firm = Detail::join('users', 'users.id', '=', 'details.user_id')
        ->select(
            'details.id',
            'details.name',
            'details.description', 
            'details.org_pic',
            'details.phone_number', 
            'details.created_at', 
            'details.location', 
            'details.kra_pin', 
            'users.name as owner', 
            'users.email'
            )
            ->where('details.id',$id)
        ->first();

        
        return view('user.firms.detail',compact('firm'));
    }

    public function firm_services($id){
        $firm_name=Detail::where('id',$id)->first();
        $send_name=$firm_name->name;

        $firm_services=Service::join('details','details.id','=','services.details_id')
        ->where('details.id',$id)
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

        return view('user.firms.services',compact('firm_services','send_name'));
    }
}
