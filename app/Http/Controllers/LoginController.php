<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('signin');
    }

    public function login(Request $request){

        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::select("select * from appusers where email = '$email' and userpassword = '$password' ");

        $count = count($users);

        if($count > 0){
            foreach($users as $user){
                $userid = $user->id;
                $username = $user->name;
                $useremail = $user->email;
                $usertype = $user->type;
                $userpass = $user->userpassword;
            }

            session(['userid' => $userid,'username' => $username,'useremail' => $useremail,
            'usertype' => $usertype,'userpass' => $userpass]);

            if($usertype == 'Vendor'){
                return redirect()->route('dashboard-overview');
            }else{
                return redirect()->route('couple-dashboard');
            }
        }else{
            return Redirect::to("loginuser")->withSuccess('username or password incorrect');
        }
    }
}

?>