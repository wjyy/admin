<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/4
 * Time: 下午 04:11
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class EletricController extends Controller{
    function eletric(){
        $a = DB::table('dormitory')->get();
        $count = count($a);
        $data = DB::table('eletric')
            ->join('dormitory', 'eletric.did', '=', 'dormitory.d_id')
            ->select('id','did','dorm', 'month', 'pay','paystyle', 'paynum', 'paytime','status')
            ->paginate($count);
        return view("eletric.elelist",['data'=>$data]);
    }
    function addeleview(){
        $data = DB::table('dormitory')->get();
        return view("eletric.addeleview",['data'=>$data]);
    }
    function addele(){
        $data = $_POST['info'];
        $arr = array_chunk($data, 4);
//        var_dump($arr);die;
        $info = [];
        for($i=0;$i<count($arr);$i++){
            $info[] = ['did'=>$arr[$i][0],'month'=>$arr[$i][2],'pay'=>$arr[$i][3]];
        }
        $res = DB::table('eletric')->insert($info);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    function updeleview($d){
        $data = explode("+",$d);
        $id   = $data[0];
        $did  = $data[1];
        if(empty($id) && empty($month)){
            die("Can't to edit!");
        }else{
            $ele  = DB::table('eletric')->where('id',$id)->first();
            $dorm = DB::table('dormitory')->where('d_id',$did)->first();
            return view("eletric.updeleview",["ele"=>$ele],["dorm"=>$dorm]);
        }
    }
    function updateele(){
        $id  = $_POST['id'];
        $pay = $_POST['pay'];
        unset($_POST['_token']);
        unset($_POST['pay']);
        if($_POST['paynum']>=$pay){
            $_POST['status']=1;
        }else{
            $_POST['status']=0;
        }
        $_POST['paytime']=time();
//        print_r($_POST);die;
        $res = DB::table('eletric')->where('id',$id)->update($_POST);
        if($res){
            return redirect()->to('eletric');
        }else{
            die("Fail to update !");
        }
    }
}