<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class ListDetail extends Controller
{
    public function index($id){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        $listing = DB::table('vendorlistings')->where('id', $id)->get();
        $listownerid = DB::table('vendorlistings')->where('id', $id)->value('vendorid');
        $users = DB::table('appusers')->where('id',$listownerid)->get();
        $last3listing = DB::table('vendorlistings')->where('vendorid',$listownerid)->orderBy('id', 'desc')->take(3)->get();
        return view('list-detail',['users'=>$users , 'listing'=>$listing , 'last3listing'=>$last3listing]);       
    }

    public function requestquote(){
        
    }

}