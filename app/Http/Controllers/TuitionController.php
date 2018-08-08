<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TuitionController extends Controller{
    //学费列表
    function tuition_list(Request $request){
        $data=DB::table('tuition')
            ->join('students','tuition.stuid','=','students.stuid')
            ->select('name','tuition.stuid','sex','studypay','pay','debt','tuition.addtime','tui_id')               
            ->paginate(2);
        return view('tution.tution_list',['data'=>$data]);
    }
    //学员学费添加页面和做添加页面
    function tuition_add(Request $request){
        if(!empty($_POST)){
            $data=$request->input();
           unset($data['_token']);
           $data['debt']=$data['studypay']-$data['pay'];
           $info=DB::table('students')->where('name',$data['name'])->first();
           $info=(array)$info;
           $data['stuid']=$info['stuid'];
           unset($data['name']);
           $data['addtime']=time();
           $res=DB::table('tuition')->insert($data);
           if($res){
                return redirect()->to('/tuition_list');
           }
        }
        //查出学费表里学员的stuid
        $data=DB::table('tuition')->get();
        $info=(array)$data;
        foreach($info as $v){
            foreach($v as $val){
                $arr[]=$val->stuid;
            }
        }
        //查出学生表里的学生信息不包括学费表里学生的信息
        $inf=DB::table('students')->whereNotin('stuid',$arr)->get();        
        return view('tution.tution_add',['data'=>$inf]);
    }
    function tuition_upd(Request $request,$id){
        if(!empty($_POST)){
            $info=DB::table('tuition')->where('tui_id',$id)->first();
            //dd($info);die;
            $info=(array)$info;
            $in=$info['pay'];
            $data=$request->input('pay');
            //dd($data);die;
            $data1=$data+$in;
            $dat['pay']=$data1;
            $dat['debt']=$info['studypay']-$dat['pay'];
            //dd($dat);die;
            $dat['addtime']=time();
          $res=DB::table('tuition')->where('tui_id',$id)->update($dat);
          if($res){
            return redirect()->to('/tuition_list');
          }
        }
        $data=DB::table('tuition')->where('tui_id',$id)->first();
        $data1=(array)$data;
        $stuid=$data1['stuid'];
        $info=DB::table('students')->where('stuid',$stuid)->first();
        return view('tution.tution_upd',['data'=>$data,'info'=>$info]);   
    }
}