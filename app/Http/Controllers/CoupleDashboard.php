<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CoupleDashboard extends Controller
{
    public function index(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            $wishlist = DB::table('wishlist')->get();
            $wishlist = count($wishlist);

            $seatingfour = DB::table('seatingfour')->get();
            $seatingfour = count($seatingfour);
            $seatingfour = $seatingfour*4;

            $seatingeight = DB::table('seatingeight')->get();
            $seatingeight = count($seatingeight);
            $seatingeight = $seatingeight*8;

            $seatingtwelve = DB::table('seatingtwelve')->get();
            $seatingtwelve = count($seatingtwelve);
            $seatingtwelve = $seatingtwelve*12;

            $guestlist_single = DB::table('guestlist_single')->get();
            $guestlist_single = count($guestlist_single);

            $guestlist_couple = DB::table('guestlist_couple')->get();
            $guestlist_couple = count($guestlist_couple);
            
            $guestlist_household = DB::table('guestlist_household')->get();
            $guestlist_household = count($guestlist_household);

            $tableseatingtotal = $seatingfour + $seatingeight + $seatingtwelve;
            $guestlisttotal = $guestlist_single + $guestlist_couple + $guestlist_household;

            $users = DB::table('appusers')->where('id',$userid)->get();
            return view('coupledashboard',['users' => $users , 'wishlist' => $wishlist 
            ,'tableseatingtotal' => $tableseatingtotal , 'guestlisttotal' => $guestlisttotal]); 
        }

    }
}