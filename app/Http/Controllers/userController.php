<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\facades\DB;

class userController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function member()
    {
        return view('member');
    }
    public function adminprofile(Request $req)
    {
        
    }
}
