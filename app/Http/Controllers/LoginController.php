<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LoginController extends Controller{
    function admin(){
        return view('login.login') ;
    }
    function dologin(Request $request){
        $data = $_POST;
        unset($data['_token']);
        $person  = DB::table('users')->where('username',$data['username'])->first();
        $person = (array)$person;
        if(!empty($person)){
            if(md5(md5($data['password'])."123456")==$person['password']){
                $request->session()->put('username', $person['username']);
                $request->session()->save();
                return redirect()->to('user');
            }else{
                echo "Password is wrong!";
            }
        }else{
            echo "Username is undefind!";
        }
    }
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
}