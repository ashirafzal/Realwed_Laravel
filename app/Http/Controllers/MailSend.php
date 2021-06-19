<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use \App\Mail\SendMail;
use App\User;

class MailSend extends Controller
{
    public function mailsend(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'phone' => 'required'
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $users = User::where('name', '=', $username)
        ->where('email', $email)
        ->where('phone', $phone)
        ->get();

        $count = count($users);

        if($count > 0){
            
            $OTP = (rand(1000,10000));

            DB::table('otp_user_request')->insert(
                array(
                       'user_name' => $username,
                       'email' => $email,
                       'phone' => $phone,
                       'otp' => $OTP,
                )
           );
            
            $details = [
                'title' => 'Real Wed | Forgot Password OTP Request',
                'body' => 'Body: This is for testing email using smtp',
                'username' => $username,
                'email' => $email,
                'OTP' => $OTP
            ];

            \Mail::to($email)->send(new SendMail($details)); 
            echo json_encode(['success'=>'Success']);
        }else{
            echo json_encode([]);
        }
    }
}