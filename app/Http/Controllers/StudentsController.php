<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class StudentsController extends Controller{
    function Students(){
        return view('Students.stulist') ;
    }
}