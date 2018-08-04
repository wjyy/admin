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
<<<<<<< HEAD

Route::get("/students","StudentsController@students");//添加页面路由

Route::get("/studlist","StudentsController@studlist");//学生列表路由

Route::post("/add_stu","StudentsController@add_stu");//添加学生跳转路由

Route::get("/del_stu/{id}","StudentsController@del_stu");//删除学生路由

Route::get("/stu_up/{id}","StudentsController@stu_up");//修改学生页面路由

Route::post("/up_stu","StudentsController@up_stu");//修改学生路由
=======
Route::get("/Students","StudentsController@Students");//添加学生信息路由

>>>>>>> e8e77969a229c63653d30fbaa0f550ab17f7e2ec
