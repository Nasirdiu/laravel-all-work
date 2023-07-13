<?php

use Firebase\JWT\JWT;

class JWTToken{
    public static function CreateToken($user):string{
        $key=env('JWT_KEY');
        $payload = [
            'iss' => "laravel-jwt",
            'iat' => time(),
            'exp' => time() + 60*60,
            'userEmail' => $userEmail
        ];
        return JWT::encode($payload,$key,'HS256');


    }
}
