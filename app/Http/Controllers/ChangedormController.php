<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ChangedormController extends Controller{
    function changedorm(){
        $data=DB::table('students')
            ->join('dormitory','students.did','=','dormitory.d_id')
            ->select('id','stuid','name','sex','age','phone','IDcard','checkindate','checkoutdate','d_id','dorm')
            ->get();
        //dd($data);
        return view('changedorm.chang',['data'=>$data]) ;
    }

    function chang_up(Request $request,$id){
        $id=$request->id;
        $data=DB::table('students')
            ->join('dormitory','students.did','=','dormitory.d_id')
            ->select('id','stuid','name','sex','age','phone','IDcard','address','checkindate','checkoutdate','d_id','dorm','stunum')
            ->where('id',$id)
            ->first();
        //dd($data);
        $arr=DB::table('dormitory')->get();
        $info=DB::table('changedorm')->orderBy('sendtime','desc')->where("s_id",$id)->first();

        if($info){
            $array1=(array)$data;
            if(!$array1['stunum']){$array1['stunum']=1;}
            $permoney=floor(2000/$array1['stunum']/30);
            $array2=(array)$info;
            $sum=floor((time()-$array2['sendtime'])/(60*60*24));
            $money=$permoney*$sum;
        }else{
            $array1=(array)$data;
            if(!$array1['stunum']){$array1['stunum']=1;}
            $permoney=floor(2000/$array1['stunum']/30);
            //dd($permoney);
            $sum=floor((time()-$array1['checkindate'])/(60*60*24));
            //dd($sum);
            $money=$permoney*$sum;
            //dd($money);
        }
        return view('changedorm.chang_up',['data'=>$data],['arr'=>$arr])->with('money',$money) ;
    }
    function up_chang(Request $request){
        $data=$request->input();
        $id=$data['s_id'];
        $did=$data['new_did'];
        unset($data['_token']);
        $data['sendtime']=time();
        //dd($data);die;
        DB::table('students')->where('id',$id)->update(['did'=>$did]);
        $res=DB::table('changedorm')->insert($data);
        if($res){
            return redirect()->to('/changedorm') ;
        }else{
            return redirect()->to('/chang_up/'.$id) ;
        }

    }
}