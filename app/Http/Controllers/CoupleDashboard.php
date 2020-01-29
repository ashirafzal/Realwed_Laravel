<?php

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CoupleDashboard extends Controller
{
    public function index(){
        return view('/coupledashboard');
    }
}
