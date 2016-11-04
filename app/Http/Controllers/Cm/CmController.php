<?php

namespace App\Http\Controllers\Cm;

use App\User;
use App\Http\Controllers\Controller;

class CmController extends Controller
{

    public function index($id = 0)
    {
        return view('cm/index', ['title' => 'welcome']);
    }

}

