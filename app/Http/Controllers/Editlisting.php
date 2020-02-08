<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class Editlisting extends Controller
{
    public function index($id){
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        $users = DB::table('appusers')->where('id',$userid)->get();
        $listing = DB::table('vendorlistings')->where('id',$id)->get();
        return view('editlisting',['users'=>$users , 'listing'=>$listing]);
    }
}
