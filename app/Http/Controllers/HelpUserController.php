<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpUserController extends Controller
{
    public function help()
    {
        return view('auth.help');
    }
}
