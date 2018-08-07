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

//学生信息管理
Route::get("/students","StudentsController@students");//添加学生信息路由
Route::get("/studlist","StudentsController@studlist");//学生列表路由
Route::post("/add_stu","StudentsController@add_stu");//添加学生跳转路由
Route::get("/del_stu/{id}","StudentsController@del_stu");//删除学生路由
Route::get("/stu_up/{id}","StudentsController@stu_up");//修改学生页面路由
Route::post("/up_stu","StudentsController@up_stu");//修改学生路由

//宿舍管理
Route::get("/dorm","DormController@dorm_list");//宿舍列表信息路由
Route::get("/add_dorm","DormController@add_dorm");//宿舍信息添加路由
Route::any("/addorm","DormController@addorm");//宿舍信息添加路由
Route::get("/dorm_del/{id}","DormController@dorm_del");//宿舍列表删除路由
Route::get("/dorm_upd/{id}","DormController@dorm_upd");//宿舍列表修改路由
Route::post("/dormupd/","DormController@dormupd");//宿舍列表修改路由




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


//调宿管理
Route::get("/changedorm","ChangedormController@changedorm");//调宿列表路由
Route::get("/chang_up/{id}","ChangedormController@chang_up");//调宿页面路由
Route::post("/up_chang","ChangedormController@up_chang");//添加日志路由

