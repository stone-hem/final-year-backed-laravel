<?php

namespace App\Http\Controllers\Api;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ApiTechnicianController extends Controller
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
                ->take(2)->get();
                return response()->json(["technicians"=>$technician]);
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

        
        return response()->json(["technicians"=>$technician]);;
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

        return response()->json([
            "technicians"=>$technician_services,
            "technician"=>$send_name
        ]);
    }
}
