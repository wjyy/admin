<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class IndexController extends Controller{
    function ind(){
        return view('index.index');
    }
}