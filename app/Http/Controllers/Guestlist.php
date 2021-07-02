<?php

namespace App\Http\Controllers;

use App\GuestListCouple;
use App\GuestListHousehold;
use App\GuestListSingle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Guestlist extends Controller
{
    public function index()
    {

        $user = Auth::user();
        return view(
            'couples.couple-guestlist',
            ['users' => $user]
        );
    }

    public function submit_singlelist(Request $request)
    {

        $user = Auth::user();

        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $address2 = $request->input('address2');
        $email = $request->input('email');
        $city = $request->input('city');
        $country = $request->input('country');
        $postcode = $request->input('postcode');

        $GuestListSingle = new GuestListSingle();

        $GuestListSingle->coupleid = $user->id;
        $GuestListSingle->fname = $fname;
        $GuestListSingle->lname = $lname;
        $GuestListSingle->address = $address;
        $GuestListSingle->address2 = $address2;
        $GuestListSingle->email = $email;
        $GuestListSingle->city = $city;
        $GuestListSingle->country = $country;
        $GuestListSingle->postcode = $postcode;

        $GuestListSingle->save();

        echo json_encode(['success' => 'Single Guest list submitted succesfully']);
    }

    public function submit_couplelist(Request $request)
    {

        $user = Auth::user();

        $couple_firstname = $request->input('couple_firstname');
        $couple_lastname = $request->input('couple_lastname');
        $couple_partnerfname = $request->input('couple_partnerfname');
        $couple_partnerlname = $request->input('couple_partnerlname');
        $couple_group = $request->input('couple_group');
        $couple_address = $request->input('couple_address');
        $couple_address2 = $request->input('couple_address2');
        $couple_country = $request->input('couple_country');
        $couple_postcode = $request->input('couple_postcode');

        $GuestListCouple = new GuestListCouple();

        $GuestListCouple->couple_id = $user->id;
        $GuestListCouple->couple_first_name = $couple_firstname;
        $GuestListCouple->couple_last_name = $couple_lastname;
        $GuestListCouple->couple_partner_fname = $couple_partnerfname;
        $GuestListCouple->couple_partner_lname = $couple_partnerlname;
        $GuestListCouple->couple_group = $couple_group;
        $GuestListCouple->couple_address = $couple_address;
        $GuestListCouple->couple_address2 = $couple_address2;
        $GuestListCouple->couple_country = $couple_country;
        $GuestListCouple->couple_postcode = $couple_postcode;

        $GuestListCouple->save();

        echo json_encode(['success' => 'Couple Guest list submitted succesfully']);
    }

    public function submit_householdlist(Request $request)
    {

        $user = Auth::user();

        $household_fname = $request->input('household_fname');
        $household_lname = $request->input('household_lname');
        $household_family = $request->input('household_family');
        $household_address = $request->input('household_address');
        $household_address2 = $request->input('household_address2');
        $household_email = $request->input('household_email');
        $household_city = $request->input('household_city');
        $household_country = $request->input('household_country');
        $household_postcode = $request->input('household_postcode');

        $GuestListhouseHold = new GuestListHousehold();

        $GuestListhouseHold->couple_id = $user->id;
        $GuestListhouseHold->household_fname = $household_fname;
        $GuestListhouseHold->household_lname = $household_lname;
        $GuestListhouseHold->household_family = $household_family;
        $GuestListhouseHold->household_address = $household_address;
        $GuestListhouseHold->household_address2 = $household_address2;
        $GuestListhouseHold->household_email = $household_email;
        $GuestListhouseHold->household_city = $household_city;
        $GuestListhouseHold->household_country = $household_country;
        $GuestListhouseHold->household_postcode = $household_postcode;

        $GuestListhouseHold->save();

        echo json_encode(['success' => 'Household Guest list submitted succesfully']);
    }
}
