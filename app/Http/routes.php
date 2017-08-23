<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//验证码的路由
Route::get('/code','CodeController@index');
//网站后台登录的路由
Route::get('/admin','Admin\LoginController@index');
Route::post('/admin','Admin\LoginController@do_login');
//网站后台的主页路由
Route::resource('/admin/index','Admin\IndexController');
//用户管理的路由
Route::resource('/admin/user','Admin\UserController');




//前台注册的路由
Route::resource('/home/register','Home\RegisterController');

//手机注册的路由\
Route::get('/home/phone','Home\PhoneController@phone');

//后台三级分类的路由
Route::controller('/admin/cate','Admin\CateController');