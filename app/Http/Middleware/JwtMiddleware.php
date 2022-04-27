<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      try {
          $user = JWTAuth::parseToken()->authenticate();
          $token = $request->bearerToken();
          if($user->login_token!=$token){
            if(!$user->login_token){
              return response()->json(['code'=>600,'status'=>false,'message' => 'Token string can not empty']);
            }else{
              return response()->json(['code'=>600,'status'=>false,'message' => 'You logged in with same user in other device']);
            }
          }
      } catch (Exception $e) {
          if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
              return response()->json(['code'=>600,'status'=>false,'message' => 'Token is Invalid']);
          }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
              return response()->json(['code'=>600,'status'=>false,'message' => 'Token is Expired']);
          }else{
              return response()->json(['code'=>600,'status'=>false,'message' => 'Authorization Token not found']);
          }
      }
      return $next($request);
    }
}
