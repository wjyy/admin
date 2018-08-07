<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class StudentsController extends Controller{


    function studlist(){
        $data=DB::table('students')
            ->leftjoin('dormitory','students.did','=','dormitory.d_id')
            ->leftjoin('course','students.sid','=','course.c_id')
            ->select('id','stuid','name','sex','age','phone','IDcard','address','checkindate','checkoutdate','enterdate','leavedate','d_id','title','dorm','stunum')
            ->get();



        return view('Students.studlist',['data'=>$data]) ;
    }

    function students(){
        $data=DB::table('dormitory')->get();
        $arr=DB::table('course')->get();
        return view('Students.studadd',['data'=>$data],['arr'=>$arr]) ;
    }

    function add_stu(Request $request){
        $data=$request->input();
        unset($data['_token']);
        $password=md5(md5('123456')."123456");
        $data['password']=$password;
        $data['enterdate']=strtotime($data['enterdate']);
        $data['leavedate']=strtotime($data['leavedate']);
        $data['checkindate']=strtotime($data['checkindate']);
        $data['checkoutdate']=strtotime($data['checkoutdate']);
        //dd($data);die;
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
        $info=DB::table('dormitory')->get();
        $info2=DB::table('course')->get();
        //dd($info2);die;
        return view('Students.stu_up',['data'=>$data],['info'=>$info,'info2'=>$info2]);
    }
    function up_stu(Request $request)
    {
        $data = $request->input();
        $id = $data['id'];
        unset($data['_token']);
        if($data['enterdate']){
            $data['enterdate']=strtotime($data['enterdate']);
        }else{
            unset($data['enterdate']);
        }
        if ($data['leavedate']) {
            $data['leavedate'] = strtotime($data['leavedate']);
        } else {
            unset($data['leavedate']);
        }

        if($data['checkindate']){
            $data['checkindate']=strtotime($data['checkindate']);
        }else{
            unset($data['checkindate']);
        }
        if($data['checkoutdate']){
            $data['checkoutdate']=strtotime($data['checkoutdate']);
        }else{
            unset($data['checkoutdate']);
        }
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