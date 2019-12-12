<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    
    
    public function login(Request $req)
    {
            $user[] = User::where('UserID', $req->userID)
                        ->where('Password', $req->password)
                        ->first();
                        
            if(count ($user) > 0){
        
                $req->session()->put('user', $user[0]["UserID"]);
                $req->session()->put('user', $user[0]["User_Type"]);
                //echo "login Done";
                
                //return redirect()->route('home.index');
                error_log("err");
                
                if($req->session()->get('user') == 'ADMIN'){
                    return redirect('adminpage');
                    //echo "admin";
                }
                else if($req->session()->get('user') == 'MEMBER'){
                    return redirect('memberpage');
                }
                //return($user); 
            }else{

                $req->session()->flash('msg', 'invalid username/password');
                return redirect('/login');
            }
        }
}

