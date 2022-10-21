<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detail;

class UserFirmController extends Controller
{
    public function index()
    {
        $firm = Detail::join('users', 'users.id', '=', 'details.user_id')
            ->select(
                'details.name',
                'details.description', 
                'details.org_pic', 
                'details.phone_number', 
                'users.name as owner', 
                'users.email')
                ->where('users.role',1)
            ->get();
        return view('user.firms.index', compact('firm'));
    }
}
