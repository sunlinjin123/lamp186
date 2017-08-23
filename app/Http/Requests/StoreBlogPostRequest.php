<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        //     'username' => 'required|regex:/[\w]/',
        // 'repassword' => 'required|same:password',
        //     'phone'=>'required|regex:/[1[3578]\d{9}]/',
        //     'email' =>'required|email',
        ];
    }
    public function messages(){

        return [
            //      'username.required' =>'用户名必填',
            // 'username.regex' =>'用户名格式错误',

            // 'password.required' =>'密码必填',
            // 'password.regex' =>'密码必填',
            // 'repassword.required' =>'确认密码必填',
            // 'repassword.same' =>'确认密码不一致',
            // 'phone.required' =>'手机号必填',
            // 'phone.regex' =>'手机号格式不对',
            // 'email.required' =>'邮箱必填',
            // 'email.regex' =>'邮箱格式不对',


                ];
    }
}
