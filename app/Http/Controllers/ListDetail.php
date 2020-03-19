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
        $requestquote = DB::table('requestquote')->where('list_creator_id', $userid)->orderBy('id', 'desc')->get();
        $last3listing = DB::table('vendorlistings')->where('vendorid',$listownerid)->orderBy('id', 'desc')->take(3)->get();
        return view('list-detail',['users'=>$users , 'listing'=>$listing , 'last3listing'=>$last3listing]);       
    }

    public function requestquote(Request $request){

        request()->validate([
            'requestquote_name' => 'required',
            'requestquote_email' => 'required',
            'requestquote_phone' => 'required',
            'requestquote_weddingdate' => 'required',
            'requestquote_comments' => 'required',
        ]);

        $requestquote_name = $request->input('requestquote_name');
        $requestquote_email = $request->input('requestquote_email');
        $requestquote_phone = $request->input('requestquote_phone');
        $requestquote_weddingdate = $request->input('requestquote_weddingdate');
        $requestquote_comments = $request->input('requestquote_comments');
        $date = date("Y/m/d");
        $localtime = $request->input('localtime');
        $list_creator_id = Session::get('userid');

        DB::table('requestquote')->insert(
            array(
                   'list_creator_id' => $list_creator_id,
                   'name' => $requestquote_name,
                   'email' => $requestquote_email,
                   'phone' => $requestquote_phone,
                   'weddingdate' => $requestquote_weddingdate,
                   'comments' => $requestquote_comments,
                   'time' => $localtime,
                   'date' => $date,
                   )
           );

           return Redirect::to("requestquote")->withSuccess('Your Quote has been submitted to the Vendor .We will contact you soon .');
    }

}