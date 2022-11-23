<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $user=User::where('role',3)->get();
        return view('admin.users.index',compact('user'));
    }
}
