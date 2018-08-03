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
Route::get("/Index","IndexController@ind");//首页路由
Route::get("/admin","LoginController@admin");//登录页面路由
Route::get("/Students","StudentsController@Students");//添加学生信息路由
