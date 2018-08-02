<?php
namespace App\Http\Controllers;

class LoginController extends Controller{
    function admin(){
        return view('login.login') ;
    }
}