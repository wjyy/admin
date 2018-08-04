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

Route::post("/dologin","LoginController@dologin");//登录验证
Route::get('/captcha/{tmp}', 'LoginController@captcha');//验证码
Route::get("/Index","IndexController@ind");//首页路由
Route::get("/admin","LoginController@admin");//登录页面路由
Route::get("/Students","StudentsController@Students");//添加学生信息路由

//宿舍管理
Route::get("/dorm","DormController@dorm_list");//宿舍列表信息路由
Route::get("/add_dorm","DormController@add_dorm");//宿舍信息添加路由
Route::any("/addorm","DormController@addorm");//宿舍信息添加路由
Route::get("/dorm_del/{id}","DormController@dorm_del");//宿舍列表删除路由
Route::get("/dorm_upd/{id}","DormController@dorm_upd");//宿舍列表修改路由
Route::post("/dormupd/","DormController@dormupd");//宿舍列表修改路由



