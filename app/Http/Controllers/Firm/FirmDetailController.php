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

        if($request->hasFile('firm_image')){ //if the user has a file then do...
            $file=$request->file('firm_image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext; //creating a unique filename
            $file->move('assets/firms',$filename);//move the file to the server by creating its path
            $detail->org_pic=$filename;//storing the file name
        }

        $detail->name=$request->input('firm_name');
        $detail->description=$request->input('description');
        $detail->phone_number=$request->input('firm_contact');
        $detail->kra_pin=$request->input('firm_kra');
        $detail->user_id=Auth::user()->id;

        if($detail->save()){
            return back()->with("message","New service has been added successfully");
        }
    }
}
