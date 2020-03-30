<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class ForgotPassword extends Controller
{
    public function otp_validation(Request $request){
        request()->validate([
            'email' => 'required',
            'phone' => 'required',
            'otp' => 'required'
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $otp = $request->input('otp');

        $users_otp_request = DB::table('otp_user_request')
        ->select('*')
        ->where('username', '=', $username)
        ->where(DB::raw('email') ,'=', $email)
        ->where(DB::raw('phone') ,'=', $phone)
        ->where(DB::raw('otp') ,'=', $otp)
        ->orderBy('id','desc')
        ->get();
         
            $count = count($users_otp_request);

            if($count > 0){
                
                $users = DB::select("select * from appusers where email = '$email' ");

                $usercounter = count($users);

                if($usercounter > 0){
                    foreach($users as $user){
                        $userid = $user->id;
                        $username = $user->name;
                        $useremail = $user->email;
                        $usertype = $user->type;
                        $userpass = $user->userpassword;
                    }

                    session(['userid' => $userid,'username' => $username,'useremail' => $useremail,
                    'usertype' => $usertype,'userpass' => $userpass]);

                    echo json_encode(['success'=>'Success']);
                }else{
                    return Redirect::to("forgotpassword")->withSuccess('something unexpected happens');
                }

            }else{
                echo json_encode([]);
            }           
    }
}