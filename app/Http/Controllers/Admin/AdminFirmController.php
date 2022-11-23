<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class AdminFirmController extends Controller
{
    public function index(){
        $firm=Detail::join('users','users.id','=','details.user_id')
        ->where('users.role',1)
        ->select(
            'users.name',
            'users.email',
            'users.created_at',
            'details.name as firm_name',
            'details.description',
            'details.org_pic',
            'details.location',
            'details.kra_pin',
            'details.phone_number',
            'details.is_approved'
        )
        ->get();
        return view('admin.firms.index',compact('firm'));
    }
}
