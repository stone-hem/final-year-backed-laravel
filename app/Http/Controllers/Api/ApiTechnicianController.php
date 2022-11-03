<?php

namespace App\Http\Controllers\Api;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
