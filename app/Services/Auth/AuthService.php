<?php 

namespace App\Services\Auth;

use App\Helpers\JsonResponse;

class AuthService 
{
    public static function login($request)
   {
       if (! $token = auth()->attempt($request->all())) 
           return response()->json(['error' => 'Unauthorized'], 401);
       else
       return  JsonResponse::LoginResponse($token);
   }


   public function logout()
   {
       auth()->logout();
       return response()->json(['message' => 'Successfully logged out']);
   }
}