<?php

namespace App\Http\Controllers\Technician;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    public function edit(){
        $check_detail=Detail::where('user_id',Auth::user()->id)->first();
        return view('technician.details.edit',compact('check_detail'));
    }
    public function update(Request $request){
        $validated=$request->validate([
            'technician_name'=>'required|string|max:50',
            'technician_kra'=>'required|string|max:50',
            'technician_contact'=>'required|numeric',
            'technician_image'=>'mimes:png,jpg,jpeg',
            'description'=>'required|string|max:255'
        ]);
        $check_detail=Detail::where('user_id',Auth::user()->id)->first();
        if($request->firm_image!=null){
            $image_path = $request->file('firm_image')->store('detail', 'public');
            Storage::delete($check_detail->org_pic);
            $check_detail->org_pic=$image_path;
        }
        $check_detail->name=$request->input('technician_name');
        $check_detail->description=$request->input('description');
        $check_detail->phone_number=$request->input('technician_contact');
        $check_detail->kra_pin=$request->input('technician_kra');
        if($check_detail->update()){
            return back()->with("message","updated..");
        }
    }
}
