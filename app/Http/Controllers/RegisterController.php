<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function insert(Request $request) 
    {
        $username = $request->input('username');
        $email = $request->input('email');
        $type = $request->input('type');
        $password = $request->input('password');
        //DB::insert('insert into appusers(name,email,type,password) values (?,?,?,?)',[$username],[$email],[$type],[$password]);
        DB::table('appusers')->insert(
            array(
                   'name'   =>   $username,
                   'email'   =>   $email,
                   'type'   =>   $type,
                   'password'   =>   $password
            )
       );

       return redirect()->route('login');
     }
}
