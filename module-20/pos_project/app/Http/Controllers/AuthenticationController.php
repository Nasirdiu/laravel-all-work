<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    function UserRegistration(Request $request){
       try{
           User::create([
               'firstName'=>$request->input('firstName'),
               'lastName'=>$request->input('lastName'),
               'email'=>$request->input('email'),
               'password'=>$request->input('password'),
           ]);

           return response()->json([
               'status' => 'success',
               'message' => 'User Registration Successfully'
           ],200);

       }catch (Exception $e){
           return response()->json([
               'status' => 'Fail',
              'message' => 'User Registration Fail'
           ],200);

       }

    }

    function UserLogin(Request $request){
        $count=User::where('email','=',$request->input('email'))
            ->where('password','=',$request->input('password'))
            ->count();
        if($count==1){
            //JWT Token
            $token=JWTToken::CreateToken($request->input('email'));
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful',
                'token'=>$token
            ],200);

        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],200);
        }

    }

}