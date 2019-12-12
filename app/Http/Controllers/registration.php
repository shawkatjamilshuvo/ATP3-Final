<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registration extends Controller
{
    public function signup(Request $req)
    {
        $user = new User();
        $user->UserID = $req->userid;
        $user->Email = $req->email;
        $user->Password = $req->password;
        $user->User_Type = $req->userType;
		
		//save user
        if($user->save()){
            return redirect()->route('login');
        }else{
            //return redirect()->route('student.add');
			echo "not Registered";
    }
}
}
