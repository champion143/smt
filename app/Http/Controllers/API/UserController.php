<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function login(Request $request){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = auth()->user();
            $user->device_token = $request->input('device_token', '');
            $user->api_token = Str::random(60);
            $user->save();
            return response()->json(['success' => true,'data'=>$user,'message'=>'Login Successfully'], 200);
        }
        else{
            return response()->json(['success'=>false,'data'=>array(),'message'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $arr_rules['name']          = "required|string|max:255";
        $arr_rules['email']         = "required|string|max:255|email|";
        $arr_rules['password']      = "required|string|min:6";
        $arr_rules['confirm_password'] = "required|string|min:6|same:password";
        $validator = Validator::make($request->all(), $arr_rules);
        if ($validator->fails())
        {
            return response()->json(['success'=>false,'data'=>array(),'message'=>'password and confirm password not matched'], 401);
        }else{
            $check = User::where('email',$request->input('email'))->first();
            if(isset($check->id))
            {
                return response()->json(['success'=>false,'data'=>array(),'message'=>'user already exist'], 401);
            }else{
                $user = new User;
                $user->name = $request->input('name');
                $user->last_name = $request->input('last_name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->api_token = Str::random(60);
                $user->save();
                return response()->json(['success' => true,'data'=>$user,'message'=>'User Registration Successfully'], 200);
            }
        }
    }

}
