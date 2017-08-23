<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{
   public function phone(Request $request){

             $phone = $request->input('phone','18516339933');
             dump($phone);
             exit;
        $code = rand(1000,9999);
        session(['phone'=>$code]);
        // 18813044687
        $url = 'http://106.ihuyi.com/webservice/sms.php?method=Submit&account=C55423641&password=36e171c1fb0b7f6e5f01c43dd5077db3&format=json&mobile='.$phone.'&content=您的验证码是：'.$code.'。请不要把验证码泄露给其他人。';
        $ch = curl_init();
        // 添加apikey到header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);
        // 将json转化为数组
        $arr = json_decode($res,true);
        echo $arr['code'];



   }
}
