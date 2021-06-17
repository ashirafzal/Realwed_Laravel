<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\RequestQuotes;
use Illuminate\Support\Facades\Auth;

class Requestquote extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $requestquote = RequestQuotes::where('list_creator_id', $user->id)->orderBy('id', 'desc')->get();

        return view('vendor.requestquote',['users'=>$user, 'requestquote'=>$requestquote]);       
    }

    public function delete($id)
    {
        RequestQuotes::where('id',$id)->delete();
        return Redirect("requestquote")->withSuccess('Request quote deleted successfully');
    }
}
