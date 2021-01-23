<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $listing = DB::table('vendor_listings')->orderBy('id')->take(10)->get();
        $couplewebsite = DB::table('couple_website')->orderBy('id')->take(10)->get();
        return view('welcome',['listing'=>$listing , 'couplewebsite'=>$couplewebsite]);       
    }

}
