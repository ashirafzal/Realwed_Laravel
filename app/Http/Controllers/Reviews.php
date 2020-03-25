<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class Reviews extends Controller
{
    public function index(){
        
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        $qualityservices = DB::table('listing_review')->where('listownerid', $userid)->avg('qualityservices');
        $faciliteis = DB::table('listing_review')->where('listownerid', $userid)->avg('faciliteis');
        $staff = DB::table('listing_review')->where('listownerid', $userid)->avg('staff');
        $flexibility = DB::table('listing_review')->where('listownerid', $userid)->avg('flexibility');
        $valueofmoney = DB::table('listing_review')->where('listownerid', $userid)->avg('valueofmoney');
        $overallrating = DB::table('listing_review')->where('listownerid', $userid)->avg('overallrating');
        $listing_review_count = DB::table('listing_review')->where('listownerid', $userid)->get();
        $listing_review_count = count($listing_review_count);

        $user = DB::table('appusers')->where('id',$userid)->get();
        $listing_review = DB::table('listing_review')->where('listownerid', $userid)->orderBy('id', 'desc')->get();
        
        return view('reviews',['user'=>$user , 'listing_review'=>$listing_review , 'qualityservices' => $qualityservices,
        'faciliteis' => $faciliteis, 'staff' => $staff , 'flexibility' => $flexibility ,
        'valueofmoney' => $valueofmoney, 'overallrating' => $overallrating, 
        'listing_review_count' => $listing_review_count]);
    }
}