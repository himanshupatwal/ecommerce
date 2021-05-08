<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    function login(Request $request){
      $user = User::where('email',$request->email)->first();
      if(!$user || Hash::check($request->email,$user->email)){
      	echo "Username or Password is not matched";
      }
      else{
      	Session::put('user',$user);
      	return redirect('/');
      }
    }
}
