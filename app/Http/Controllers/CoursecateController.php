<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CoursecateController extends Controller
{
    //课程分类列表
    function cate_list(Request $request){
        $data=DB::table('course_cate')->get();
        $info=$this->sort($data);
        //dd($info);die;
        return view('courseCate.cate_list',['data'=>$info]);
    }
    //递归循环
    function sort($data,$pid=0,$lever=0){
       static $arr=[];
        foreach($data as $v){
            if($v->pid==$pid){
                $v->lever=$lever;
                $arr[]=$v;
                $this->sort($data,$v->cate_id,$lever+1);
            }
        }
        return $arr;
    }
    //课程分类添加和做添加页面
    function cate_add(Request $request){
        if(!empty($_POST)){
            $data=$request->input();
            unset($data['_token']);
            $res=DB::table('course_cate')->insert($data);
            if($res){
                return redirect()->to('course_cate');
            }
        }
        $data=DB::table('course_cate')->get();
        $info=$this->sort($data);
        return view('courseCate.cate_add',['data'=>$info]);
    }
    //删除
    function del(Request $request,$id){
        $data=DB::table('course_cate')->get();
        $info= $this->do_del($data,$id);
        //将主id转化为数组
        $info[]=intval($id);
        //删除多个id用whereIn
        $res=DB::table('course_cate')->whereIn('cate_id',$info)->delete();
        if($res){
            return redirect()->to('course_cate');
        }
    }
    //无限极删除
    function do_del($data,$id){
        static $arr=[];
        foreach($data as $v){
            if($v->pid==$id){
                $arr[]=$v->cate_id;
                $this->do_del($data,$v->cate_id);
            }
        }
        return $arr;
    }
    //修改页面和做修改页面
    function cate_upd(Request $request,$id){
        if(!empty($_POST)){
            $data=$request->input();
            //dd($data);die;
            unset($data['_token']);
            //dd($data);die;
            $res=DB::table('course_cate')->where('cate_id',$id)->update($data);
            if($res){
                return redirect()->to('course_cate');
            }
        }
        $data=DB::table('course_cate')->get();
        $info=$this->sort($data);
        $data=DB::table('course_cate')->where('cate_id',$id)->first();
        return view('courseCate.cate_upd',['data'=>$data,'info'=>$info]);
        
    }
}