<?php

namespace App\Http\Controllers\Firm;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(){
        $service=Service::paginate(10);
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

        $service=new Service();

        if($request->hasFile('service_image')){ //if the user has a file then do...
            $file=$request->file('service_image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext; //creating a unique filename
            $file->move('assets/services',$filename);//move the file to the server by creating its path
            $service->picture=$filename;//storing the file name
        }

        $service->name=$request->input('service_name');
        $service->description=$request->input('description');
        $service->user_id=Auth::user()->id;

        if($service->save()){
            return back()->with("message","New service has been added successfully");
        }
    }
}
