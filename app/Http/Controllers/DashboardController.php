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
            return view('dashboard')
            ->with('username', $request->session()->get('username'));
        }
        //return view('dashboard');        
    }
}
