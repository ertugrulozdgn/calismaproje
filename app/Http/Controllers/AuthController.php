<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Alogout()
    {
        Auth:logout();
        return redirect()->route('tasks.index');
    }
}
