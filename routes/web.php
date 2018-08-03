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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/admin","LoginController@admin");//登录界面路由
Route::post("/dologin","LoginController@dologin");//登录验证
Route::get('/captcha/{tmp}', 'LoginController@captcha');//验证码
Route::get("/Students","StudentsController@Students");//登录路由
