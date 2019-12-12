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
        $users = DB::table('users')->select('UserID','Email','Password','User_Type')->get();
        return view('adminprofile', compact('users'));
    }
    public function adminpro(Request $req)
    {
        $user = DB::table('users')->select('UserID','Email','Password','User_Type')->where('UserID', 'Shuvo1')->first();
        //echo $user->name;
        return view('adminpro', compact('users'));
    }
}
