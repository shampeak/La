<?php

namespace App\Http\Controllers\Doc;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function welcome($id = 0)
    {
        return view('doc/welcome', ['title' => 'welcome']);
    }

}

