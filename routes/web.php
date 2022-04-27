<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () { return view('welcome');});
Route::group(['middleware' => ['web','auth','role:admin']], function () {
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  Route::get('users/delete/{uid}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.delete');
  Route::get('users/profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('profile');
  Route::get('users/edit-profile', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('edit-profile');
  Route::put('users/profile-update/{id}', [App\Http\Controllers\Admin\UserController::class, 'profileUpdate'])->name('profile-update');
  Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});
