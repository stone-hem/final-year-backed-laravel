<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    public function register(Request $request){

        try {
            $validator = Validator::make($request->all(), [
                'name'=>'required|string|min:3',
                'email'=>'required|email|unique:users,email|string',
                'password'=>'required|min:8',
            ]);
    
            if($validator->fails()){
                return response(['errors'=>$validator->errors()->all()], 422);    
            }
    
            $user=User::create([
                'role'=>3,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);

            if($user){
                return response()->json([
                    "success"=>"true"
                ],200);
            }
            else{
                return response()->json([
                    "success"=>"false"
                ],400);
            }
          
          

        } catch (\Throwable $th) {
            return response()->json([
                'message'=>$th
            ]);
        }
        
    }

    public function login(Request $request){

        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|string',
                'password' => 'required|min:8',
            ]);
            if($validator->fails()){
                return response()->json(['error' => $validator->errors()->all()]);
            }
    
            if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
                $user = User::where('email',$request->email)->first(); 
                $token=$user->createToken(time())->plainTextToken;

                $response = ['user' => $user, 'token' => $token];
                return response()->json($response, 200);
            } 
            else{ 
                return response()->json(['Unauthorized'=>'Email or/and password do not match our records'], 400);
            } 
    
        } catch (\Throwable $th) {
            return response()->json([
                'message'=>$th
            ]);
        }
        
    }

    public function userDetails($id){
        $user=User::find($id);
        return response()->json([
            "user"=>$user
        ]);
    }

    public function destroy(Request $request)
    {
        // delete all tokens, essentially logging the user out
       $done= $request->user()->tokens()->delete();
        // delete the current token that was used for the request
       $dome= $request->user()->currentAccessToken()->delete();

       if ($done && $dome) {
        return response()->json([
            "message"=>"logged out "
        ],200);
       }
    }
}
