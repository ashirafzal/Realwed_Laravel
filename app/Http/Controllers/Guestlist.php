<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class Guestlist extends Controller
{
    public function index(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $users = DB::table('appusers')->where('id',$userid)->get();
            return view('couple-guestlist',['users'=>$users]); 
        }
    }

    public function submit_singlelist(Request $request){
        echo json_encode(['success'=>'Single Guest list submitted succesfully']);
    }

    public function submit_couplelist(Request $request){
        echo json_encode(['success'=>'Single Guest list submitted succesfully']);
    }

    public function submit_householdlist(Request $request){
        echo json_encode(['success'=>'Single Guest list submitted succesfully']);
    }
}