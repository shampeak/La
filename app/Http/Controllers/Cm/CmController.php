<?php

namespace App\Http\Controllers\Cm;

use App\User;
use App\Http\Controllers\Controller;

class CmController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('log', ['only' => ['fooAction', 'barAction']]);
//        $this->middleware('subscribed', ['except' => ['fooAction', 'barAction']]);
    }

    public function index($id = 0)
    {
        return view('cm/index', ['title' => 'welcome']);
    }

    public function demo($id = 0)
    {
        return view('cm/demo', ['title' => 'welcome']);
    }

    public function getlist($id = 0)
    {
        return view('cm/getlist', ['title' => 'welcome']);
    }

    public function sysman($id = 0)
    {
        return view('cm/sysman', ['title' => 'welcome']);
    }

    public function input($id = 0)
    {
        $request = \Illuminate\Http\Request::capture();

        $url = $request->url();             //当前url
        $name = $request->input('name');    //获取
        if ($request->is('admin/*')) {      //判断
            //
            echo 123;
        }
        $method = $request->method();       //判断
        if ($request->isMethod('post')) {
            //
        }
        $res = $request->toArray();
        print_r($res);



        //命名过的路由生成url
        $url = route('name');
        //动作生成url
        $url = action('FooController@method');
        //当前动作
        $action = Route::currentRouteAction();



        echo $url;
        //echo $id;
      //  $uri = $request->path();
       // echo $uri;
    }


    public function store(Request $request)
    {
        $request = \Illuminate\Http\Request::capture();

        echo $name;
        //
    }

}

