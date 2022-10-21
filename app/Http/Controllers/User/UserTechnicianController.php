<?php

namespace App\Http\Controllers\User;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserTechnicianController extends Controller
{
    public function index()
    {
        $technician = Detail::join('users', 'users.id', '=', 'details.user_id')
            ->select(
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
}
