<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LoginController extends Controller{
    function admin(){
        return view('login.login') ;
    }
}