<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 加载登录页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login.index');
    }

    /*
    *
    *执行登陆的动作
    *
    */
    public function do_login(Request $request)
    {       //获取用户的验证码信息
                $code1 = session('code');
                $code2 = $request ->input('code');
                // dump($code1);
                // dump($code2);
                //判断
                if($code1 == $code2){
                    return redirect('/admin/index')->with('success','登陆成功');
                }

        
        //     //获取input框的验证码
       

            //接受用户提交的数据   稍后再链接上数据库之后再验证用户密码登录信息
                

            
                    //执行跳转到后台主页面
         // 
       
    }
}
