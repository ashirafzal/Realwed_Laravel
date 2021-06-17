<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\VendorListing;
use Illuminate\Support\Facades\Auth;

class MylistedItems extends Controller
{
    public function index(){

        $user = Auth::user();

        $users = User::where('id',$user->id)->first();
        $listing = VendorListing::where('vendor_id',$user->id)->get();
        return view('vendor.mylisting',['users'=>$users , 'listing'=>$listing]);       
    }

    public function delete($id){

        VendorListing::where('id',$id)->delete();
        return Redirect("editlisting-success")->withSuccess('Listing deleted successfully');
    }

}