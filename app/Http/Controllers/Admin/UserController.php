<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
            //获取用户提交的分页总数和搜索数据
            $count = $request ->input('count',10);
            $search = $request ->input('search','');
            // dump($count);
            // dump($search);
            $request = $request ->all();

        // return 123;
        //获取所有的数据
        $data = User::where('username','like','%'.$search.'%')->paginate($count);
        // dump($data);


        return view('admin.user.index',['data'=>$data,'request'=>$request]);
        // echo 123;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //用户添加的页面
        return view('admin.user.create');
        // echo 123;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPostRequest $request)
    {
        //执行添加的动作
    //     $data = $request ->all();
    //     // dump($data);
    //     //表单验证
    //      $this->validate($request, [
    //     'username' => 'required|regex:/[\w]/',
    //     'repassword' => 'required|same:password',
    //         'phone'=>'required|regex:/[1[3578]\d{9}]/',
    //         'email' =>'required|email',
    // ],[
    //     //自定义错误信息显示
    //         'username.required' =>'用户名必填',
    //         'username.regex' =>'用户名格式错误',

    //         'password.required' =>'密码必填',
    //         'password.regex' =>'密码必填',
    //         'repassword.required' =>'确认密码必填',
    //         'repassword.same' =>'确认密码不一致',
    //         'phone.required' =>'手机号必填',
    //         'phone.regex' =>'手机号格式不对',
    //         'email.required' =>'邮箱必填',
    //         'email.regex' =>'邮箱格式不对',




    // ]);
        //获取用户提交的数据
        $data = $request ->all();
        // dump($data);
        //处理添加
        $user = new user;
        $user->username = $data['username'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->remember_token = str_random(50); //str_random 随机字符串
        if($user ->save()){
            return redirect('/admin/user/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }




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
            //获取用户提交的数据
        $data = User::find($id);
        // dump($data);



        return view('admin.user.edit',['data'=>$data]);
    }

    /**
     * 执行修改的动作
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取用户提交的数据
        $data = $request ->all($id);

        // dump($request);
        //执行修改
        $user = User::find($id);
        // dump($user);
        $user -> email = $data['email'];
        $user ->phone = $data['phone'];
        if($user ->save()){
            return redirect('/admin/user')->with('success','修改成功');
        }else{
             return back()->with('error','修改失败'); 
        }
    }

    /**
     * 用户执行删除的动作
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //获取用户提交的数据
        $data = User::find($id);
        $res = $data ->delete();
            if($res){
                return redirect('/admin/user')->with('success','删除成功');
            }else{
                return back()->with('error','删除失败');
            }




    }
}
