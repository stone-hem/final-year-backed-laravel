<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ApiServiceController extends Controller
{
    public function index(){
        $service=Service::join('users','users.id','=','services.user_id')
        ->join('details','details.id','=','services.details_id')
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
        ->take(2)->get();
        return response()->json(["services"=>$service]);
    }
}
