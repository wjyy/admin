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
Route::get("/admin","LoginController@admin");//登录页面路由
Route::post("/dologin","LoginController@dologin");//登录验证
Route::get("/logout","LoginController@logout");//退出登录，消除session
Route::get('/captcha/{tmp}', 'LoginController@captcha');//验证码

Route::get("/index","IndexController@ind");//首页路由

Route::get("/students","StudentsController@students");//添加学生信息路由

Route::get("/class","ClassController@class");//班级列表展示
Route::get("/addclassview","ClassController@addclassview");//班级添加页面
Route::post("/addclass","ClassController@addclass");//班级添加
Route::get('/delclass/{id}', 'ClassController@delclass');//删除班级单条数据
Route::get('/updclassview/{id}', 'ClassController@updclassview');//修改班级单条数据页面
Route::post('/updateclass', 'ClassController@updateclass');//修改班级单条数据页面

Route::get("/teachers","TeachersController@teachers");//教师列表展示
Route::get("/addteaview","TeachersController@addteaview");//教师添加页面
Route::post("/addtea","TeachersController@addtea");//教师添加
Route::get("/updteaview{id}","TeachersController@updteaview");//教师修改页面
Route::post("/updtea","TeachersController@updtea");//教师修改
Route::get("/deltea/{id}","TeachersController@deltea");//教师删除
