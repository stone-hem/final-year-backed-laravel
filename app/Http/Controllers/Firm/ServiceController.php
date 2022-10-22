<?php

namespace App\Http\Controllers\Firm;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        $service=Service::where('user_id',Auth::user()->id)->get();
        return view('firm.services.index',compact('service'));
    }
    public function create(){
        return view('firm.services.add');
    }
    public function store(Request $request){
        $validated=$request->validate([
            'service_name'=>'required|string|max:50',
            'service_image'=>'required|mimes:png,jpg,jpeg',
            'description'=>'required|string|max:255'
        ]);
        $detail=Detail::where('user_id',Auth::user()->id)->first();
        if(!$detail){
            return back()->with("message","Kindly make sure you fully update your details to create services");
        }

        $service=new Service();

        $image_path = $request->file('service_image')->store('service', 'public');
        $service->picture=$image_path;
        $service->name=$request->input('service_name');
        $service->description=$request->input('description');
        $service->user_id=Auth::user()->id;
        $service->details_id=$detail->id;

        if($service->save()){
            return back()->with("message","New service has been added successfully");
        }
    }
}
