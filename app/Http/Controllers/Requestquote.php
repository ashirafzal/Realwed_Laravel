<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class Requestquote extends Controller
{
    public function index(){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        $requestquote = DB::table('requestquote')->where('list_creator_id', $userid)->orderBy('id', 'desc')->get();
        $users = DB::table('appusers')->where('id',$userid)->get();

        return view('requestquote',['users'=>$users , 'requestquote'=>$requestquote]);       
    }

    public function delete($id){
        DB::table('requestquote')->where('id',$id)->delete();
        return Redirect::to("requestquote")->withSuccess('Request quote deleted successfully');
    }
}
