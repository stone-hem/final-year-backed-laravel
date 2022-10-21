<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirmDetailController extends Controller
{
    public function index(){
        $details=Detail::where('user_id',Auth::user()->id)->first();

        return view('firm.details.index',compact('details'));
    }
    public function create(){
        $details=Detail::where('user_id',Auth::user()->id)->first();
        return view('firm.details.add',compact('details'));
    }
    public function store(Request $request){
        $validated=$request->validate([
            'firm_name'=>'required|string|max:50',
            'firm_kra'=>'required|string|max:50',
            'firm_contact'=>'required|numeric',
            'firm_image'=>'required|mimes:png,jpg,jpeg',
            'description'=>'required|string|max:255'
        ]);

        $detail=new Detail();

        $check_detail=Detail::where('user_id',Auth::user()->id)->first();


        if($check_detail){
            $image_path = $request->file('firm_image')->store('detail', 'public');
            $check_detail->org_pic=$image_path;
    
            $check_detail->name=$request->input('firm_name');
            $check_detail->description=$request->input('description');
            $check_detail->phone_number=$request->input('firm_contact');
            $check_detail->kra_pin=$request->input('firm_kra');
            $check_detail->user_id=Auth::user()->id;
            if($check_detail->save()){
                return back()->with("message","Firm profile updated successfully");
            }
        }
        elseif(!$check_detail){
            $image_path = $request->file('firm_image')->store('detail', 'public');
            $detail->org_pic=$image_path;
    
            $detail->name=$request->input('firm_name');
            $detail->description=$request->input('description');
            $detail->phone_number=$request->input('firm_contact');
            $detail->kra_pin=$request->input('firm_kra');
            $detail->user_id=Auth::user()->id;
            if($detail->save()){
                return back()->with("message","Firm profile created successfully");
            }
        }
        
    }
}
