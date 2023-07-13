<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function UserLogin(){


    }
    function UserRegistration(Request $request){
        return User::create($request->input());

    }
    function SendOTPToEmail(){

    }
    function OTPVerify(){

    }
    function SetPassword(){

    }
    function ProfileUpdate(){

    }
}
