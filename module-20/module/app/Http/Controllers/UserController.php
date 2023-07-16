<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    function UserRegistration(Request $request){
        try {User::create([
            'firstName'=>$request->input('firstName'),
            'lastName'=>$request->input('lastName'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'password'=>$request->input('password'),

        ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User Registration Successfully'
            ],200);
        }catch (\Exception $e){
            return response()->json([
                'status' => 'Fail',
                'message' => 'User Registration Fail'
//                'message' => $e->getMessage()
            ],200);
        }

    }

    function UserLogin(Request $request){
        $count=User::where('email','=',$request->input('email'))
            ->where('password','=',$request->input('password'))
            ->count();
        if ($count==1){
            //user login JWT token
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

    function SendOTPCode(Request $request){
        $email=$request->input('email');
        $otp=rand(10000,99999);
        $count=User::where('email','=',$email)->count();
        if($count==1){
            // OTP Email Address
            Mail::to($email)->send(new OTPMail($otp));
            // OTO Code Table Update
            User::where('email','=',$email)->update(['otp'=>$otp]);
            return response()->json([
                'status' => 'success',
                'message' => '4 Digit OTP Code has been send to your email !'
            ],200);

        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ]);
        }
    }


}
