<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return response($validator->errors(), 400);
        }else{
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);
            return response([
                "token" => $user->createToken()->plainTextToken,
                "user" => $user
            ]);
        }
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return response($validator->errors(), 400);
        }else{
            $credentials = ['email' => $request->email, 'password' => bcrypt($request->password) ];
            if(Auth::attempt($credentials)){
                $user = Auth::user();
                return response([
                    "token" => $user->createToken()->plainTextToken,
                    "user" => $user
                ]);
            }else{
                return response(["message" => "Invalid credentials provided."], 401);
            }
        }
    }
}
