<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class TasksController extends Controller
{


   //function 只有一個 可以不用命名
//    public function _invoke($id){

//    }

public function index()
{
    # 建立模板變數 title
    $binding['title'] = 'ProductController@index';    
    $datas = Post::get();

    # 回傳 html, 使用 resources\views\product\list.blade.php 模板
    # 第二個參數將要使用的變數給模板($binding)
    return view('product.list',compact('datas') );
    // ['name' => 'Samantha']
}

public function create()
{
    $binding['title'] = 'GET -> ProductController@create';
    
    # blade from action 設定為 
    return view('product.lis', $binding);
}
public function store(){
    $request = request()->all();

    echo "<pre>";
    // print_r($request);
   var_dump($request);
    exit;
}

}


