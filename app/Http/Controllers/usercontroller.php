<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class usercontroller extends Controller
{
    //
   public function login(Request $req)
    {
    	 $user= User::where(['email'=>$req->input('email')])->first();
          // return $user->password;
         if(!$user || !Hash::check($req->input('password'),$user->password))
         {
         	return "UserName or Password is not matched";

         }
         else
         {
         	$req->session()->put('user',$user);
         	return redirect('/');
         }

    }
}
