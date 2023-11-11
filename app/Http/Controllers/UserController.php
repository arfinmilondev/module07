<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showMessage()
    {
        return "<h1>Hello, Laravel!</h1>";
    }
}
