<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct(Request $request){
//        echo $request->path();die;
        if(!empty($request->path()) && $request->path()!="admin" && $request->path()!="dologin"){
            $session = session('username');
            if(empty($session)){
//                echo 123;die;
                redirect('/admin')->send();
            }
        }
    }
}
