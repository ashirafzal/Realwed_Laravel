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

        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::select("select * from appusers where email = '$email' and password = '$password' ");

        $count = count($users);

        if($count > 0){
            foreach($users as $user){
                $userid = $user->id;
                $username = $user->name;
                $useremail = $user->email;
                $usertype = $user->type;
            }

            session(['userid' => $userid,'username' => $username,'useremail' => $useremail,'usertype' => $usertype]);

            if($usertype == 'Vendor'){
                return redirect()->route('dashboard-overview');
            }else{
                return view('/coupledashboard');
            }
        }else{
            return Redirect::route('signintocontinue');
        }
    }
}

?>