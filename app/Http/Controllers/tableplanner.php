<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class tableplanner extends Controller
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
            $guestlist_single = DB::table('guestlist_single')->where('id',$userid)->get();
            $guestlist_couple = DB::table('guestlist_couple')->where('id',$userid)->get();
            $guestlist_household = DB::table('guestlist_household')->where('id',$userid)->get();
            return view('couple_tableplanner',['users'=>$users , 'guestlist_single'=>$guestlist_single ,
            'guestlist_couple'=>$guestlist_couple ,'guestlist_household'=>$guestlist_household]); 
        }
    }
}