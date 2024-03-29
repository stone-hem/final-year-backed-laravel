<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Detail;
use Illuminate\Http\Request;

class AdminTechnicianController extends Controller
{
    public function index(){
        $technician=Detail::join('users','users.id','=','details.user_id')
        ->where('users.role',2)
        ->select(
            'users.name',
            'users.email',
            'users.created_at',
            'details.name as tech_name',
            'details.description',
            'details.org_pic',
            'details.location',
            'details.kra_pin',
            'details.phone_number',
            'details.is_approved'
        )
        ->get();
        $best_technician=Cart::join('users','users.id','=','carts.details_id')
        ->join('details','details.id','=','carts.details_id')
        ->where('users.role',2)
        ->select(
            'users.name',
            'users.email',
            'details.name as tech_name',
            'details.description',
            'details.org_pic',
            'details.location',
            'details.kra_pin',
            'details.phone_number',
        )
        ->first();

        return view('admin.technicians.index',compact('technician','best_technician'));
    }
}
