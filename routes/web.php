<?php

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

Route::namespace('Backend')->group(function () {
  Route::get("/", "LoginController@index")->name('login');
  Route::post("/login", "LoginController@handersLogin")->name('handersLogin');
  Route::get("/home", "HomeController@index")->name('home');
});
