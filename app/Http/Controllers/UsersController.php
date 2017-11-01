<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function under()
    {
       return view('front_end.under', compact ('underconstruct'));
    }
}
