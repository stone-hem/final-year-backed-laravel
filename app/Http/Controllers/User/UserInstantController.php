<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Instant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserInstantController extends Controller
{
    public function index(){
        $details=Detail::all();
        return view('user.instant.index',compact('details'));
    }
    public function instant(){
        $instant=Instant::join('details','details.id','=','instants.firm_or_technician')
        ->where('instants.user_id',Auth::user()->id)
        ->select(
            'details.name',
            'instants.id',
            'instants.title',
            'instants.description',
            'instants.user_current_location'
        )
        ->get();
        return view('user.instant.instants',compact('instant'));
    }
    public function description($id){
        $details=Detail::where('id',$id)->first();
        return view('user.instant.desc',compact('details'));
    }
    public function store(Request $request,$id){
        $validated=$request->all([
            'title'=>'required|string|max:30',
            'description'=>'required|string|max:100'
        ]);

        $instant=new Instant();
        $instant->title=$request->input('title');
        $instant->description=$request->input('description');
        $instant->user_current_location='Nairobi';
        $instant->user_id=Auth::user()->id;
        $instant->firm_or_technician=$id;
        if($instant->save()){
            Alert::success("Info","Request send , be right back in a moment");
            return back();
        }
    }
    public function destroy($id){
        $instant=Instant::where('id',$id)->first();
        $instant->delete();
        Alert::success("Info","Instant order cancelled..");
        return back();
    }
}
