<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 显示指定用户的个人信息
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return 'user.test'.$id;
//        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    /**
     * 响应／users的GET请求
     */
    public function getIndex()
    {
        echo 123;
        //
    }

    /**
     * 响应／users／show／1的GET请求
     */
    public function getShow($id = 0)
    {
        //
    }

    /**
     * 响应／users/admin－profile的GET请求
     */
    public function getAdminProfile()
    {
        //
    }

    /**
     * 响应／users／profile的POST请求
     */
    public function postProfile()
    {
        //
    }




    /**
     * 储存一个新用户的信息。
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        echo name;
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    
    
    
    
    
}

