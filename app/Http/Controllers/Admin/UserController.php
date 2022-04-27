<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\RoleUser;
use Session;

class UserController extends Controller{

    public function __construct(){}

    public function index(){
      $users=User::where('role','user')->paginate(10);
      return view('admin.users.index',compact('users'));
    }

    /*
    @developer:-jasmaninder
    @method:-create
    @description:-This method will open add user form
    */
    public function create(Request $request){
      return view('admin.users.create');
    }

    /*
    @developer:-jasmaninder
    @method:-edit
    @description:-This method will open edit user form
    */
    public function edit($id){
      $userInfo=User::find($id);
      return view('admin.users.edit',compact('userInfo'));
    }

    /*
    @developer:-jasmaninder
    @method:-store
    @description:-This method will store user info into DB
    */
    public function store(Request $request){
      if($request->isMethod('post')) {
        $postedData=$request->all();
        $postedData['name']=$postedData['first_name'].' '.$postedData['last_name'];
        $postedData['password']=Hash::make($postedData['password']);
        if($userInfo=User::create($postedData)) {
            Session::flash('message', 'User has been added successfully!');
            Session::flash('alert-class', 'alert-success');
          return redirect()->route('users.index');
        }else{
          Session::flash('message', 'There is some problem in adding user!');
          Session::flash('alert-class', 'alert-danger');
          return Redirect::back()->withErrors(['msg', 'There is some problem in user registeration.']);
        }
      }
    }

    /*
    @developer:-jasmaninder
    @method:-update
    @description:-This method will update user info into DB
    */
    public function update(Request $request,$id){
      if($request->isMethod('put')) {
        $postedData=$request->all();
        $postedData['name']=$postedData['first_name'].' '.$postedData['last_name'];
        unset($postedData['_method'],$postedData['_token']);
        $userInfo=User::find($id);
        if($userInfo=User::where('id',$id)->update($postedData)) {
            Session::flash('message', 'User has been updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('users.index');
        }else{
          Session::flash('message', 'There is some problem in user updating!');
          Session::flash('alert-class', 'alert-danger');
          return Redirect::back()->withErrors(['msg', 'There is some problem in user registeration.']);
        }
      }
    }

    /*
    @developer:-jasmaninder
    @method:-destroy
    @description:-This method will delete user from DB
    */
    public function destroy(User $user,$id){
      $user->where('id',$id)->delete();
      Session::flash('message', 'User has been deleted successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('users.index');
    }

    /*
    @developer:-jasmaninder
    @method:-profile
    @description:-This method will show logged profile
    */
    public function profile(){
      return view('admin.users.profile');
    }

    /*
    @developer:-jasmaninder
    @method:-editProfile
    @description:-This method will edit logged profile
    */
    public function editProfile(){
      $userInfo=User::find(auth()->user()->id);
      return view('admin.users.edit-profile',compact('userInfo'));
    }

    /*
    @developer:-jasmaninder
    @method:-profileUpdate
    @description:-This method will update logged profile
    */
    public function profileUpdate(Request $request,$id){
      if($request->isMethod('put')) {
        $postedData=$request->all();
        $postedData['name']=$postedData['first_name'].' '.$postedData['last_name'];
        unset($postedData['_method'],$postedData['_token']);
        if($userInfo=User::where('id',$id)->update($postedData)) {
            Session::flash('message', 'profile has been updated successfully!');
            Session::flash('alert-class', 'alert-success');
          return redirect()->route('profile');
        }else{
          Session::flash('message', 'There is some problem in profile update!');
          Session::flash('alert-class', 'alert-danger');
          return Redirect::back()->withErrors(['msg', 'There is some problem in profile updation.']);
        }
      }
    }
}
