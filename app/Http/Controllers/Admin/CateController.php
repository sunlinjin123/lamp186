<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    /*
    *
    *商品列表主页
    *
    */    
    public function getIndex()
    {
        return view('admin.cate.index');
    }








    /*
    *商品分类添加
    *
    **/
    public function getAdd()
    {
        return view('admin.cate.add');
    }
}
