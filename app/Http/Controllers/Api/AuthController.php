<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    public function register(Request $request){
    }

    /*login method*/
    public function login(Request $request){
      $userQuery=User::where('email',$request->email);
      if($userQuery->count()>0){ $user=$userQuery->first();}
      $credentials = $request->only('email', 'password');
      try {
          if (! $token = JWTAuth::attempt($credentials)) {
              return response()->json([
                'error' => true,'message' => 'invalid_credentials'
              ], 400);
          }
      } catch (JWTException $e) {
          return response()->json([
            'error' => true,'message' => 'could_not_create_token'
          ], 500);
      }

      if($user){
        if(!updateLoginToken($user->id,$token)) {
          return response()->json(['code'=>400,'status'=>false,'message'=>'Login token is not updated']);
        }
      }

      return $this->respondWithToken($token,$user);
    }

    /*logout method*/
    public function logout(Request $request){
        $user = JWTAuth::parseToken()->authenticate();
        //$user->login_token=null;
        $user->save();
        return response()->json(['code'=>200,'message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token,$data=array()){
      return response()->json([
        'data'=>$data,
        'token' => $token
      ]);
    }
}
