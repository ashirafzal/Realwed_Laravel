<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function insert(Request $request) 
    {        
        request()->validate([
            'username' => 'required',
            'email' => 'required',
            'type' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            'phone' => 'nullable',
            'editordata' => 'nullable',
            'image' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'youtube' => 'nullable',
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $type = $request->input('type');
        $password = $request->input('password');
        $confirmpassword = $request->input('confirmpassword');
        $phone = $request->input('phone');
        $editordata = $request->input('editordata');
        $image = $request->file('image');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $youtube = $request->input('youtube');

        if($password != $confirmpassword){
            return Redirect::to("register")->withSuccess('Password and confirm password not matched');
        }else{
            DB::table('users')->insert(
                array(
                       'name' => $username,
                       'email' => $email,
                       'type' => $type,
                       'password' => $password,
                       'description' => $editordata,
                       'userimage' => $image,
                       'facebook' => $facebook,
                       'twitter' => $twitter,
                       'instagram' => $instagram,
                       'youtube' => $youtube,
                )
           );

           return Redirect::to("register")->withSuccess('User registered succesfully now go to login page');
        }

     }
}