<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CourseController extends Controller
{
    //课程列表
   function course_list(Request $request){
       $data=DB::table('course')
            ->join('course_cate','course.cate_id','=','course_cate.cate_id')
            ->paginate(2);
           // dd($data);die;
        return view('course.course_list',['data'=>$data]);
   }
   //课程添加
   function course_add(Request $request){
       if(!empty($_POST)){
            $data=$request->input();
            unset($data['_token']);
            $data['addtime']=time();
            $res=DB::table('course')->insert($data);
            if($res){
                return redirect()->to('/course');
            }
       }
       $data=DB::table('course_cate')->get();
       $info=$this->sort($data);
       return view('course.course_add',['data'=>$info]);
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
    //课程列表删除
    function del(Request $request,$id){
        //dd($id);die;
        $res=DB::table('course')->where('c_id',$id)->delete();
        if($res){
            return redirect()->to('/course');
        }
    }
    //课程修改页面和做修改页面
    function upd(Request $request,$id){
        if(!empty($_POST)){
            $data=$request->input();
            unset($data['_token']);
            $res=DB::table('course')->where('c_id',$id)->update($data);
            if($res){
                return redirect()->to('/course');
            }
        }
        $data=DB::table('course_cate')->get();
        $info=$this->sort($data);
        $data=DB::table('course')->where('c_id',$id)->first(); 
        return view('course.course_upd',['data'=>$data,'data1'=>$info]);
    }
}