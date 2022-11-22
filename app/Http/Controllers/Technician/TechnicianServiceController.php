<?php

namespace App\Http\Controllers\Technician;

use App\Models\Detail;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TechnicianServiceController extends Controller
{
    public function index(){
        $service=Service::where('user_id',Auth::user()->id)->get();
        return view('technician.services.index',compact('service'));
    }
    public function create(){
        return view('technician.services.add');
    }
    public function store(Request $request){
        $validated=$request->validate([
            'service_name'=>'required|string|max:50',
            'service_image'=>'required|mimes:png,jpg,jpeg',
            'service_value'=>'required|numeric',
            'description'=>'required|string|max:255'
        ]);

        $service=new Service();

        $detail=Detail::where('user_id',Auth::user()->id)->first();

        if(!$detail){
            return back()->with("info","Kindly make sure you fully update your details to create services");
        }

        $image_path = $request->file('service_image')->store('image', 'public');
        $service->picture=$image_path;

        $service->name=$request->input('service_name');
        $service->value=$request->input('service_value');
        $service->description=$request->input('description');
        $service->user_id=Auth::user()->id;
        $service->details_id=$detail->id;

        if($service->save()){
            return back()->with("message","service created..");
        }
    }
    public function edit($id){
        $service=Service::where('id',$id)->first();
        return view('technician.services.edit',compact('service'));
    }
    public function update(Request $request,$id){
        $validated=$request->validate([
            'service_name'=>'required|string|max:50',
            'service_value'=>'required|numeric',
            'service_image'=>'mimes:png,jpg,jpeg',
            'description'=>'required|string|max:255'
        ]);
        $service=Service::where('id',$id)->first();
        if($request->service_image!=null){
            $image_path=$request->file('service_image')->store('service','public');
            Storage::delete($service->picture);
            $service->picture=$image_path;
        }
        $service->name=$request->input('service_name');
        $service->value=$request->input('service_value');
        $service->description=$request->input('description');
        if($service->update()){
            return back()->with("message","$service->name updated..");
        }
    }

    public function destroy($id){
        $service=Service::where('id',$id)->first();
        if(Storage::delete($service->picture)){
            $service->delete();
        }
        return back()->with("message","$service->name has been deleted successfully");
    }
}
