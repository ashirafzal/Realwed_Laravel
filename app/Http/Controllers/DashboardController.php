<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(! $request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $users = DB::table('appusers')->where('id',$userid)->get();
            $listing = DB::table('vendorlistings')->where('vendorid',$userid)->get();
            $listing = count($listing);
            $listing_review_count = DB::table('listing_review')->where('listownerid', $userid)->get();
            $listing_review_count = count($listing_review_count);
            $requestquote_count = DB::table('requestquote')->where('list_creator_id', $userid)->orderBy('id', 'desc')->get();
            $requestquote_count = count($requestquote_count);
            return view('dashboard',['users'=>$users, 'listing'=>$listing,
            'listing_review_count'=>$listing_review_count, 
            'requestquote_count'=>$requestquote_count]); 
        }        
    }
}
