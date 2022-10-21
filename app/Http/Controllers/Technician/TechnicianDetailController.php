<?php

namespace App\Http\Controllers\Technician;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TechnicianDetailController extends Controller
{
    public function index(){
        $details=Detail::where('user_id',Auth::user()->id)->first();
        return view('technician.details.index',compact('details'));
    }
    public function create(){
        $details=Detail::where('user_id',Auth::user()->id)->first();
        return view('technician.details.add',compact('details'));
    }
    public function store(Request $request){
        $validated=$request->validate([
            'technician_name'=>'required|string|max:50',
            'technician_kra'=>'required|string|max:50',
            'technician_contact'=>'required|numeric',
            'technician_image'=>'required|mimes:png,jpg,jpeg',
            'description'=>'required|string|max:255'
        ]);

        $detail=new Detail();

        $image_path = $request->file('technician_image')->store('service','public');
        $detail->org_pic=$image_path;

        $detail->name=$request->input('technician_name');
        $detail->description=$request->input('description');
        $detail->phone_number=$request->input('technician_contact');
        $detail->kra_pin=$request->input('technician_kra');
        $detail->user_id=Auth::user()->id;

        if($detail->save()){
            return back()->with("message","New service has been added successfully");
        }
    }
}
