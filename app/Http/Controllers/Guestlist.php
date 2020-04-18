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

        $userid = Session::get('userid');
        
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $address2 = $request->input('address2');
        $email = $request->input('email');
        $city = $request->input('city');
        $country = $request->input('country');
        $postcode = $request->input('postcode');

        DB::table('guestlist_single')->insert(
            array(
                   'coupleid'   =>   $userid,
                   'fname'   =>   $fname,
                   'lname'   =>   $lname,
                   'address'   =>   $address,
                   'address2'   =>   $address2,
                   'email'   =>   $email,
                   'city'   =>   $city,
                   'country'   =>   $country,
                   'postcode'   =>   $postcode
            )
       );

        echo json_encode(['success'=>'Single Guest list submitted succesfully']);
    }

    public function submit_couplelist(Request $request){

        $userid = Session::get('userid');
        
        $couple_firstname = $request->input('couple_firstname');
        $couple_lastname = $request->input('couple_lastname');
        $couple_partnerfname = $request->input('couple_partnerfname');
        $couple_partnerlname = $request->input('couple_partnerlname');
        $couple_group = $request->input('couple_group');
        $couple_address = $request->input('couple_address');
        $couple_address2 = $request->input('couple_address2');
        $couple_country = $request->input('couple_country');
        $couple_postcode = $request->input('couple_postcode');

        DB::table('guestlist_couple')->insert(
            array(
                   'coupleid'   =>   $userid,
                   'couple_firstname'   =>   $couple_firstname,
                   'couple_lastname'   =>   $couple_lastname,
                   'couple_partnerfname'   =>   $couple_partnerfname,
                   'couple_partnerlname'   =>   $couple_partnerlname,
                   'couple_group'   =>   $couple_group,
                   'couple_address'   =>   $couple_address,
                   'couple_address2'   =>   $couple_address2,
                   'couple_country'   =>   $couple_country,
                   'couple_postcode'   =>   $couple_postcode
            )
       );

        echo json_encode(['success'=>'Couple Guest list submitted succesfully']);
    }

    public function submit_householdlist(Request $request){

        $userid = Session::get('userid');
        
        $household_fname = $request->input('household_fname');
        $household_lname = $request->input('household_lname');
        $household_family = $request->input('household_family');
        $household_address = $request->input('household_address');
        $household_address2 = $request->input('household_address2');
        $household_email = $request->input('household_email');
        $household_city = $request->input('household_city');
        $household_country = $request->input('household_country');
        $household_postcode = $request->input('household_postcode');

        DB::table('guestlist_household')->insert(
            array(
                   'coupleid'   =>   $userid,
                   'household_fname'   =>   $household_fname,
                   'household_lname'   =>   $household_lname,
                   'household_family'   =>   $household_family,
                   'household_address'   =>   $household_address,
                   'household_address2'   =>   $household_address2,
                   'household_email'   =>   $household_email,
                   'household_city'   =>   $household_city,
                   'household_country'   =>   $household_country,
                   'household_postcode'   =>   $household_postcode
            )
       );

        echo json_encode(['success'=>'Household Guest list submitted succesfully']);
    }
}