<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserApiResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register( Request $request ){

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email' => 'required',
            'password'=>'required'
        ]);

            $user =  new User();
            $user->first_name =$request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->api_token = bin2hex(openssl_random_pseudo_bytes(30));

            $user->save();

        return new UserApiResource($user);


    }
    public function login( Request $request ){

        $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);
        $username = $request->input('email');
        $password = $request->input('password');

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)){
            $user = User::where('email',$username)->first();
            return new UserApiResource($user);
        }
        $message =  [
            'error' => true,
            'message' =>'User Login Attempt Failed '
        ];
        return response($message,404);
    }
}
