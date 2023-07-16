<?php

namespace App\Helper;

use Firebase\JWT\JWT;
use Mockery\Exception;

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

  public static function VerifyToken($token):string{
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
