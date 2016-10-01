<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
/**
 *
 */
class AuthController extends Controller
{

  public function login()
  {
    # code...
    return view('auth.login');

  }
  public function handle_login (Request $request ){
     $data = $request-> input ('password','email');
     $email=$request->input ('email');
      $password=$request->input ('password');

      return('your email is '.$email.' and password is '.$password );



  }
  public function register()
  {
    # code...
    return view('auth.register');

  }
}
