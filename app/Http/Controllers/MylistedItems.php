<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class MylistedItems extends Controller
{
    public function index(){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        $users = DB::table('appusers')->where('id',$userid)->get();
        $listing = DB::table('vendorlistings')->where('vendorid',$userid)->get();
        return view('mylisting',['users'=>$users , 'listing'=>$listing]);       
    }

    public function delete($id){
        DB::table('vendorlistings')->where('id',$id)->delete();
        return Redirect::to("editlisting-success")->withSuccess('Listing deleted successfully');
    }

}