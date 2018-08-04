<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class StudentsController extends Controller{


    function studlist(){
        $data=DB::table('students')->get();
        //dd($data);die;
        return view('Students.studlist',['data'=>$data]) ;
    }

    function students(){
        return view('Students.studadd') ;
    }

    function add_stu(Request $request){
        $data=$request->input();
        unset($data['_token']);
        $password=md5(md5('123456')."123456");
        $data['password']=$password;
       // dd($data);die;
        $res=DB::table('students')->insert($data);
        if($res){
            return redirect()->to('/studlist') ;
        }else{
            return redirect()->to('/students') ;
        }
    }

    function del_stu(Request $request,$id){
        $id=$request->id;
        //dd($id);die;
        $res=DB::table('students')->where('id',$id)->delete();
        if($res){
            return redirect()->to('/studlist') ;
        }else{
            die;
        }
    }

    function stu_up(Request $request,$id){
        $id=$request->id;
        //dd($id);die;
        $data=DB::table('students')->where('id',$id)->first();
        //dd($data);die;
        return view('Students.stu_up',['data'=>$data]);
    }
    function up_stu(Request $request){
        $data=$request->input();
        $id=$data['id'];
        unset($data['_token']);
        unset($data['id']);
        //dd($data);die;
        $res=DB::table('students')->where('id',$id)->update($data);
        if($res){
            return redirect()->to('/studlist/') ;
        }else{
             return redirect()->to('/stu_up/'.$id) ;
        }
    }

}