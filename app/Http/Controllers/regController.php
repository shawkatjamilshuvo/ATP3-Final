<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regController extends Controller
{
    public function registration()
    {
        return view('Registration');
    }
}
