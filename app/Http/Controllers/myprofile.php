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

        $users = DB::table('appusers')->where('id',$userid)->get();

        return view('myprofile',['users'=>$users]);       
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

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $image = $filename;
        }
    
       DB::table('appusers')->where('id',$vendorid)->update(array(
        'name'=>$vendorname,'email'=>$email,
        'type'=>$usertype,'userpassword'=>$vendorpass,
        'phone'=>$phone,'description'=>$editordata,
        'userimage'=>$image,'facebook'=>$facebook,
        'twitter'=>$twitter,'instagram'=>$instagram,
        'youtube'=>$youtube,
        ));

       return Redirect::to("myprofile")->withSuccess('Profile updated successfully');
       
    }

    public function updatepassword(Request $request)
    {
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');
        $userpass = Session::get('userpass');

        request()->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required',
            'retypepassword' => 'required',
        ]);

        $currentpassword = $request->input('currentpassword');
        $newpassword = $request->input('newpassword');
        $retypepassword = $request->input('retypepassword');

        $users = DB::select("select * from appusers where email = '$useremail' and userpassword = '$currentpassword' ");

        $count = count($users);

        if($count > 0){
            foreach($users as $user)
            {
                $userid = $user->id;
                $username = $user->name;
                $useremail = $user->email;
                $usertype = $user->type;
                $userpass = $user->userpassword;
                $userphone = $user->phone;
                $userdescription = $user->description;
                $userimage = $user->userimage;
                $userfacebook = $user->facebook;
                $usertwitter = $user->twitter;
                $userinstagram = $user->instagram;
                $useryoutube = $user->youtube;
            }

            if($newpassword == $retypepassword)
            {
                DB::table('appusers')->where('id',$userid)->update(array(
                    'name'=>$username,'email'=>$useremail,
                    'type'=>$usertype,'userpassword'=>$newpassword,
                    'phone'=>$userphone,'description'=>$userdescription,
                    'userimage'=>$userimage,'facebook'=>$userfacebook,
                    'twitter'=>$usertwitter,'instagram'=>$userinstagram,
                    'youtube'=>$useryoutube,
                    ));
            
                   return Redirect::to("myprofile")->withSuccess('Password updated successfully');
            }
            else
            {
                return Redirect::to("myprofile")->withSuccess('new password & retype password doesnot matched');
            }
        }
        else{
            return Redirect::to("myprofile")->withSuccess('Current password is not correct');
        }
    }

}