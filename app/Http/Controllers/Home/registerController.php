<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Mail;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //         $data = $request->all();

    //          $email = $data['email'];
    //         $token = str_random(50);
    //          $user = new User;
    //         $arr = ['email'=>$email,'remember_token'=>$token];
    //         $id = $user->insertGetId($arr);


            //1.先验证数据是否提交的格式正确不正确
            //2.发送邮件  之前先去  .env里面配置东西
            // self::_mail($email,$id,$token);
                self::_mail('1','2','3');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    static public function _mail($email,$id,$token)
    {                 //发送的模板       //数据
          Mail::send('home.mail.index', ['user' => ''], function ($m) use ($email) {
        // $m->from('hello@app.com', 'Your Application');

        $m->to('840514322@qq.com')->subject('woaini');
         });
    

    }
  

}
