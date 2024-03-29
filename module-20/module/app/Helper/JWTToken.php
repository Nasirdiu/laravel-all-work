<?php

namespace App\Helper;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Exception;

class JWTToken
{
  public static function CreateToken($UserEmail):string{
        $key=env('JWT_KEY');
        $payload=[
          'iss'=>'laravel-token',
          'lat'=>time(),
          'exp'=>time()+60*60,
            'UserEmail'=>$UserEmail
        ];
     return JWT::encode($payload,$key,'HS256');
    }

    public static function CreateTokenForSetPassword($userEmail):string{
        $key =env('JWT_KEY');
        $payload=[
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*20,
            'userEmail'=>$userEmail
        ];
        return JWT::encode($payload,$key,'HS256');
    }

    public static function VerifyToken($token):string
    {
        try {
            $key =env('JWT_KEY');
            $decode=JWT::decode($token,new Key($key,'HS256'));
            return $decode->userEmail;
        }
        catch (Exception $e){
            return 'unauthorized';
        }
    }
}
