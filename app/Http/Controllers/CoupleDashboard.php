<?php

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CoupleDashboard extends Controller
{
    public function index(){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $users = DB::table('appusers')->where('id',$userid)->get();
            foreach($users as $users){
                echo $user->name;
                echo $user->email;
                echo $user->type;
                echo $user->userpassword;
            }
            return view('coupledashboard',['users'=>$users]); 
        }

    }
}