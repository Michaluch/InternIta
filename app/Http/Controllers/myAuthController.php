<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class myAuthController extends Controller
{
    public function getLogin()
    {
        $login = true;

        return view('layout.main', ['login' => $login]);	
    }
}
