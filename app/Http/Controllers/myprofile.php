<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class myprofile extends Controller
{
    public function index(){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        return view('myprofile');       
    }

    public function save(Request $request)
    {
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');
        $userpass = Session::get('userpass');

        request()->validate([
            'image' => 'nullable',
            'vendorid' => 'required',
            'vendorname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'editordata' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'youtube' => 'nullable',
        ]);

        $image = $request->file('image');
        $vendorid = $request->input('vendorid');
        $vendorname = $request->input('vendorname');
        $vendorpass = $request->input('vendorpass');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $editordata = $request->input('editordata');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $youtube = $request->input('youtube');
    
       DB::table('appusers')->where('id',$vendorid)->update(array(
        'name'=>$vendorname,'email'=>$email,
        'type'=>$usertype,'userpassword'=>$vendorpass,
        'phone'=>$phone,'description'=>$editordata,
        'userimage'=>$image,'facebook'=>$facebook,
        'twitter'=>$twitter,'instagram'=>$instagram,
        'youtube'=>$youtube,
        ));

       return Redirect::to("updateuser")->withSuccess('Profile updated successfully');
       
    }

    public function updatepassword(Request $request)
    {

    }

}