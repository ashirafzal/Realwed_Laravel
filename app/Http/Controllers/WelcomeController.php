<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $listing = DB::table('vendorlistings')->orderBy('id')->take(10)->get();
        $couplewebsite = DB::table('couplewebsite')->orderBy('id')->take(10)->get();
        return view('welcome',['listing'=>$listing , 'couplewebsite'=>$couplewebsite]);       
    }

}
