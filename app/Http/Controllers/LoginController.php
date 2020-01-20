<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
            echo 'record exist</br>';
            foreach($users as $user){
                echo '</br>'.$user->id.'</br>';
                echo '</br>'.$user->name.'</br>';
                echo '</br>'.$user->email.'</br>';
                echo '</br>'.$user->type.'</br>';
                echo '</br>'.$user->password;
            }
        }else{
            echo 'record not exist';
        }
    }
}

?>