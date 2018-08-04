<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/4
 * Time: 上午 11:05
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class TeachersController extends Controller{
    function teachers(){
        $data = DB::table('teachers')->get();
        return view("teachers.tealist",['data'=>$data]);
    }
    function addteaview(){
        $data = DB::table('teachers')->get();
        return view("teachers.addteaview",['data'=>$data]);
    }
    function addtea(){
        $data = $_POST;
        unset($data['_token']);
        $res  = DB::table('teachers')->insert($data);
        if($res){
            return redirect()->to('teachers');
        }else{
            return redirect()->to('addteaview');
        }
    }
    function deltea($id){
        if(empty($id)){
            die("Can't delete data");
        }else{
            $res = DB::table('teachers')->where('tid',$id)->delete();
            if($res){
                return redirect()->to('teachers');
            }
        }
    }
    function updteaview($id){
        if(empty($id)){
            die("Id is undefind");
        }else{
            $data = DB::table('teachers')->where('tid',$id)->first();
            return view("teachers.updteaview",["data"=>$data]);
        }
    }
    function updtea(){
        $id  = $_POST['tid'];
        unset($_POST['_token']);
        $res = DB::table('teachers')->where('tid',$id)->update($_POST);
        if($res){
            return redirect()->to('teachers');
        }else{
            die("Fail to update !");
        }
    }
}