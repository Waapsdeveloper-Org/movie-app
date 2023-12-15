<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    //
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...

            $token = Auth::user()->createToken('MovieApp')->accessToken;
            $obj = [
                'user' => Auth::user(),
                'token' => $token
            ];

            return self::success('Login Success',$obj);
        }

        return self::failure('Login Failed');


    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // $user->password = $request->password;
        $user->save();

        $token = $user->createToken('MovieApp')->accessToken;
        $obj = [
            'user' => $user,
            'token' => $token
        ];

        return self::success('Register Success',$obj);
    }
    public function logout(){
        Auth::logout();
        return self::success('Logout Success');
    }
    public function getcurrentUser(){
         
        $user = Auth::user();
        if (!$user) {
            return self::failure('No authenticated user found', null, 404);
        }
        return self::success('Current user found', ['user' => $user]);
    }
}
