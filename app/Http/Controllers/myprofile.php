<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class myprofile extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('vendor.myprofile', ['user' => $user]);
    }

    public function couple_profile()
    {
        $user = Auth::user();
        return view('couples.couple_profile', ['users' => $user]);
    }

    public function save(Request $request)
    {
        $user = Auth::user();

        $image = $request->file('image');
        $name = $request->input('vendorname');
        $vendorpass = $request->input('vendorpass');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $editordata = $request->input('editordata');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $youtube = $request->input('youtube');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $image = $filename;
        }

        $user->name = $name;
        $user->email  = $email;
        $user->type = $user->type;
        $user->password = $vendorpass;
        $user->phone = $phone;
        $user->description = $editordata;
        $user->userimage = $image;
        $user->facebook = $facebook;
        $user->twitter = $twitter;
        $user->instagram = $instagram;
        $user->youtube = $youtube;

        $user->save();

        if($user->role === 'Vendor'){
            return Redirect("myprofile")->withSuccess('Profile updated successfully');
        }else{
            return Redirect("couple-profile")->withSuccess('Profile updated successfully');
        }

    }

    public function updatepassword(Request $request)
    {
        $user = Auth::user();

        request()->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required',
            'retypepassword' => 'required',
        ]);

        $currentpassword = Hash::make($request->input('currentpassword'));
        $newpassword = Hash::make($request->input('newpassword'));
        $retypepassword = Hash::make($request->input('retypepassword'));

        $user = User::where('email', $user->email)->where('password', $currentpassword)->get();
        $count = count($user);

        if ($count > 0) {
            if ($newpassword == $retypepassword) {
                $user->password = $newpassword;
                $user->save();
                return Redirect("myprofile")->withSuccess('Password updated successfully');
            } else {
                return Redirect("myprofile")->withSuccess('new password & retype password doesnot matched');
            }
        } else {
            return Redirect("myprofile")->withSuccess('Current password is incorrect');
        }
    }

}