<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class ChangeclassController extends Controller{
    //展示调班列表
    function ch_class(Request $request){
        $data=DB::table('changeclass')
            ->join('students','changeclass.stuid','=','students.stuid')
            ->paginate(2);
        return view('changeclass.changclass_list',['data'=>$data]);
    }
    //调班学员添加页面和做添加
    function change_add(Request $request){
        if(!empty($_POST)){
            $data=$request->input();
            //dd($data);die;
            $name=$data['name'];
            $info=DB::table('students')->where('name',$name)->first();
            $info=(array)$info;
            if(!isset($info['stuid'])){
                //echo "<jscript>alert('bucunzai');<jscript>";
                return redirect()->back()->withInput()->withErrors('学生姓名不存在！');
            }
            $data['stuid']=$info['stuid'];
            unset($data['_token']);
            unset($data['name']);
           $data['sendtime']=time();
            $res=DB::table('changeclass')->insert($data);
            if($res){
                return redirect()->to('/change_class');
            }
        }
        $data=DB::table('class')->get();
        return view('changeclass.change_add',['data'=>$data]);
    }
    //修改调班学员页面和做修改页面
    function change_upd(Request $request,$id){
        if(!empty($_POST)){
            $data=$request->input();
            unset($data['_token']);
            $name=$data['name'];
            $info=DB::table('students')->where('name',$name)->first();  
            $info=(array)$info;
            $data['stuid']=$info['stuid'];
            unset($data['name']);
            $id=$data['change_id'];
            $data['sendtime']=time();
           // dd($data);die;
            $res=DB::table('changeclass')->where('change_id',$id)->update($data);
            if($res){
                return redirect()->to('/change_class');
            }

        }
        $data=DB::table('changeclass')->where('change_id',$id)->first();
        $data=(array)$data;
        $stuid=$data['stuid'];
        $info=DB::table('students')->where('stuid',$stuid)->first();
        $info=(array)$info;
        $data['name']=$info['name'];
        $data=(object)$data;
        $data1=DB::table('class')->get();
        return view('changeclass.change_upd',['data'=>$data,'data1'=>$data1]);
    }
}
