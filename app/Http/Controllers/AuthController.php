<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request){

        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...

            $token = Auth::user()->createToken('MovieApp')->accessToken;
            $obj = [
                'user' => Auth::user(),
                'token' => $token
            ];

            return self::success('Login Success',['data' => $obj]);
        }

        return self::failure('Login Failed');


    }

    public function register(Request $request){

        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }






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

        return self::success('Register Success',['data' => $obj]);
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
        return self::success('Current user found', ['data' => $user]);
    }
}
