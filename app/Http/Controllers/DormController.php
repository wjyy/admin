<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DormController extends Controller
{
    //宿舍信息列表
    function  dorm_list(){
        $data=DB::table('dormitory')

            ->join('students','students.did','=','dormitory.d_id')
            ->paginate(2);
        //dd($data);die;
        return view('dorm.dorm_list',['data'=>$data]);
    }
    //宿舍信息添加页面展示
    function add_dorm(){
        ;

        return view('dorm.add_dorm');
    }
    //宿舍信息做添加
    function addorm(Request $request){
        $data=$request->input();
        unset($data['_token']);
        //dd($data);die;
        $data['addtime']=time();
        $res=DB::table('dormitory')->insert($data);
        if($res){
            return redirect()->to('/dorm');
        }
    }
    //宿舍信息删除
    function dorm_del(Request $request,$id){
        $id=$request->id;
        $res=DB::table('dormitory')->where('d_id',$id)->delete();
        if($res){
            return redirect()->to('dorm');
        }
    }
    //宿舍修改页面和做修改
    function dorm_upd(Request $request,$id){
        $id=$request->id;
        $data1=DB::table('dormitory')->where('d_id',$id)->first();

        return view('dorm.dorm_upd',['info'=>$data1]);
    }
    function dormupd(Request $request){
        $data=$request->input();
        unset($data['_token']);
        $id=$data['d_id'];
        $res=DB::table('dormitory')->where('d_id',$id)->update($data);
        if($res){
            return redirect()->to('/dorm');
        }
    }
}