<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function index(){
        Session::flush();
        return Redirect::to("user-singin");
    }
}
