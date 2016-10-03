<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use App\User;
use DB;

class AuthController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function handleLogin(Request $request)
    {
      $this->validate($request, User::$login_validation_rules);      
      /*$v = Validator::make($request->all(),  [
        'email' => 'required',
        'password' => 'required'
      ]);
       $v1 = Validator::make($request->all(), [
        'email' => 'required|email|exists:users',
        'password' => 'required'
      ]);*/
     $data = $request->only('email', 'password');
     //check email verification is done or not
     $check_verified = DB::table('users')->where('email', $data['email'])->value('verified');
      if(\Auth::attempt($data)&&$check_verified){
          //$role = DB::table('users')->where('email', $request['email'])->value('role');      
          return redirect()->intended('index');
      }
      else{
      return back()->withInput()->withErrors(['email' => 'Username or password is invalid']);   
      }
      
    }

    public function logout()
    {
      \Auth::logout();
      return redirect()->route('login');
    }
}