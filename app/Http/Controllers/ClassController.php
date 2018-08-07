<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/3
 * Time: 下午 07:43
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class ClassController extends Controller{
    function class(){
//        $data = DB::table('class')->get();
        $data = DB::table('class')
            ->join('teachers', 'class.tid', '=', 'teachers.tid')
            ->select('cid', 'roomnum', 'tname')
            ->get();
        return view("class.classlist",['data'=>$data]);
    }
    function addclassview(){
        $data = DB::table('teachers')->get();
        return view("class.addclassview",['data'=>$data]);
    }
    function addclass(){
        $data = $_POST;
        unset($data['_token']);
        $res  = DB::table('class')->insert($data);
        if($res){
            return redirect()->to('class');
        }else{
            return redirect()->to('addclassview');
        }
    }
    function delclass($id){
        if(empty($id)){
            die("Can't delete data");
        }else{
            $res = DB::table('class')->where('cid',$id)->delete();
            if($res){
                return redirect()->to('class');
            }
        }
    }
    function updclassview($id){
        if(empty($id)){
            die("Id is undefind");
        }else{
            $class = DB::table('class')->where('cid',$id)->first();
            $teachers = DB::table('teachers')->get();
//            print_r($data);die;
            return view("class.updclassview",["class"=>$class],["teachers"=>$teachers]);
        }
    }
    function updateclass(){
        $id  = $_POST['cid'];
        unset($_POST['_token']);
        $res = DB::table('class')->where('cid',$id)->update($_POST);
        if($res){
            return redirect()->to('class');
        }else{
            die("Fail to update !");
        }
    }
}