<?php
use App\Models\User;

/*This will return count of editors*/
if(!function_exists('dashboardCount')){
    function dashboardCount($role){
      return User::where('role',$role)->count();
    }
}

//This method will update login token for user id
if(! function_exists('updateLoginToken')){
  function updateLoginToken($id,$tokenString){
    $userInfo=User::find($id);
    $userInfo->login_token=$tokenString;
    if($userInfo->save()){
      return true;
    }else{
      return false;
    }
  }
}
?>
