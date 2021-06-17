<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class Pricing extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $user = User::where('id',$user->id)->first();
        return view('vendor.pricing',['users'=>$user]);
    }   
}