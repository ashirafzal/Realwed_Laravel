<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class Whislist extends Controller
{
    public function index(Request $request)
    {
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(! $request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else
        {           
            $wishlist = DB::table('wishlist')->where('userid',$userid)->get();
            $users = DB::table('appusers')->where('id',$userid)->get();
            
            return view('wishlist',['users'=>$users , 'wishlist'=>$wishlist]);
              
        }
    }
}