<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
use Illuminate\Support\Facades\Auth;
use Session;

class Role {

  public function handle($request, Closure $next, String $role) {
    $user = Auth::user();
    $loggedRole=$user->role;
    if($loggedRole == $role){
      return $next($request);
    }else{
      Session::flash('warning', 'You are authorized to access this page');
      return redirect('/home');
    }
  }
}
?>
