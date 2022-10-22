<?php

namespace App\Http\Controllers\User;

use App\Models\Detail;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserTechnicianController extends Controller
{
    public function index()
    {
        $technician = Detail::join('users', 'users.id', '=', 'details.user_id')
            ->select(
                'details.id',
                'details.name',
                'details.description', 
                'details.org_pic', 
                'details.phone_number', 
                'users.name as owner', 
                'users.email')
                ->where('users.role',2)
            ->get();
        return view('user.technicians.index', compact('technician'));
    }

    public function technician($id){
        $technician = Detail::join('users', 'users.id', '=', 'details.user_id')
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

        
        return view('user.technicians.detail',compact('technician'));
    }

    public function technician_services($id){
        $technician_name=Detail::where('id',$id)->first();
        $send_name=$technician_name->name;

        $technician_services=Service::join('details','details.id','=','services.details_id')
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

        return view('user.technicians.services',compact('technician_services','send_name'));
    }
}
