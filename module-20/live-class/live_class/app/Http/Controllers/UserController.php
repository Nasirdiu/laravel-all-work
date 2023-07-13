<?php

namespace App\Http\Controllers;
use App\Helper\JWTToken;
use App\Mail\OTPEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    function UserLogin(Request $request){
            $res=User::where($request->input())->count();

            if($res==1){
                $token=JWTToken::CreateToken($request->input('email'));
                return response()->json(['msg'=>"success","data"=>$token]);
            }else{
                return response()->json(['msg'=>"fail",'data'=>'unauthorized']);
            }

    }
    function UserRegistration(Request $request){
        return User::create($request->input());
        }
    function SendOTPToEmail(Request $request){
        $UserEmail=$request->input('email');
        $otp=rand(1000,9999);
        $res=User::where($request->input())->count();

        if($res==1){
            // Mail Send
            Mail::to($UserEmail)->send(new OTPEmail());
            // Database Update
            User::where($request->input())->update(['otp'=>$otp]);
            return response()->json(['msg'=>"success",'data'=>'OTP sent to your email']);
        }else {
            return response()->json(['msg'=>"fail",'data'=>'unauthorized']);
        }



    }
    function OTPVerify(){

    }
    function SetPassword(){

    }
    function ProfileUpdate(){

    }
}
