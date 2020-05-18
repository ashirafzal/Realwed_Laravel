<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class ListDetail extends Controller
{
    public function index($id){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(session()->has('userid')) {
            $qualityservices = DB::table('listing_review')->where('listid', $id)->avg('qualityservices');
            $faciliteis = DB::table('listing_review')->where('listid', $id)->avg('faciliteis');
            $staff = DB::table('listing_review')->where('listid', $id)->avg('staff');
            $flexibility = DB::table('listing_review')->where('listid', $id)->avg('flexibility');
            $valueofmoney = DB::table('listing_review')->where('listid', $id)->avg('valueofmoney');
            $overallrating = DB::table('listing_review')->where('listid', $id)->avg('overallrating');
            $listing_review_count = DB::table('listing_review')->where('listid', $id)->get();
            $listing_review_count = count($listing_review_count);
    
            $listing = DB::table('vendorlistings')->where('id', $id)->get();
            $listownerid = DB::table('vendorlistings')->where('id', $id)->value('vendorid');
            $listowner = DB::table('appusers')->where('id',$listownerid)->get();
            $user = DB::table('appusers')->where('id',$userid)->get();
            $requestquote = DB::table('requestquote')->where('list_creator_id', $userid)->orderBy('id', 'desc')->get();
            $last3listing = DB::table('vendorlistings')->where('vendorid',$listownerid)->orderBy('id', 'desc')->take(3)->get();
            $listingloop = DB::table('vendorlistings')->where('vendorid',$listownerid)->orderBy('id', 'desc')->take(3)->get();
            $listing_review = DB::table('listing_review')->where('listid', $id)->orderBy('id', 'desc')->take(5)->get();
            return view('list-detail',['user'=>$user ,'listowner'=>$listowner ,
            'listing'=>$listing , 'listing_review'=>$listing_review , 'qualityservices' => $qualityservices,
            'faciliteis' => $faciliteis, 'staff' => $staff , 'flexibility' => $flexibility ,
            'valueofmoney' => $valueofmoney, 'overallrating' => $overallrating, 
            'listing_review_count' => $listing_review_count, 'last3listing' => $last3listing,
            'listingloop' => $listingloop]);
        }else{
            $qualityservices = DB::table('listing_review')->where('listid', $id)->avg('qualityservices');
            $faciliteis = DB::table('listing_review')->where('listid', $id)->avg('faciliteis');
            $staff = DB::table('listing_review')->where('listid', $id)->avg('staff');
            $flexibility = DB::table('listing_review')->where('listid', $id)->avg('flexibility');
            $valueofmoney = DB::table('listing_review')->where('listid', $id)->avg('valueofmoney');
            $overallrating = DB::table('listing_review')->where('listid', $id)->avg('overallrating');
            $listing_review_count = DB::table('listing_review')->where('listid', $id)->get();
            $listing_review_count = count($listing_review_count);
    
            $listing = DB::table('vendorlistings')->where('id', $id)->get();
            $listownerid = DB::table('vendorlistings')->where('id', $id)->value('vendorid');
            $listowner = DB::table('appusers')->where('id',$listownerid)->get();
            $requestquote = DB::table('requestquote')->where('list_creator_id', $userid)->orderBy('id', 'desc')->get();
            $last3listing = DB::table('vendorlistings')->where('vendorid',$listownerid)->orderBy('id', 'desc')->take(3)->get();
            $listing_review = DB::table('listing_review')->where('listid', $id)->orderBy('id', 'desc')->take(5)->get();
            return view('list-detail-2',['listowner'=>$listowner ,
            'listing'=>$listing , 'listing_review'=>$listing_review , 'qualityservices' => $qualityservices,
            'faciliteis' => $faciliteis, 'staff' => $staff , 'flexibility' => $flexibility ,
            'valueofmoney' => $valueofmoney, 'overallrating' => $overallrating, 
            'listing_review_count' => $listing_review_count, 'last3listing' => $last3listing]);
        }               
    }

    public function requestquote(Request $request){

        request()->validate([
            'requestquote_name' => 'required',
            'requestquote_email' => 'required',
            'requestquote_phone' => 'required',
            'requestquote_weddingdate' => 'required',
            'requestquote_comments' => 'required'
        ]);

        $list_creator_id = $request->input('requestquote_creatorid');
        $requestquote_name = $request->input('requestquote_name');
        $requestquote_email = $request->input('requestquote_email');
        $requestquote_phone = $request->input('requestquote_phone');
        $requestquote_weddingdate = $request->input('requestquote_weddingdate');
        $requestquote_comments = $request->input('requestquote_comments');
        $date = date("Y/m/d");
        $localtime = $request->input('localtime');

        DB::table('requestquote')->insert(
            array(
                   'list_creator_id' => $list_creator_id,
                   'name' => $requestquote_name,
                   'email' => $requestquote_email,
                   'phone' => $requestquote_phone,
                   'weddingdate' => $requestquote_weddingdate,
                   'comments' => $requestquote_comments,
                   'time' => $localtime,
                   'date' => $date
                   )
           );

           echo json_encode(['success'=>'Your Quote has been submitted to the Vendor .We will contact you soon .']);
    }

    public function submitreview(Request $request){
        
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        request()->validate([
            'listownerid' => 'required',
            'listid' => 'required',
            'userid' => 'required',
            'review_text' => 'required',
            'name' => 'required',
            'email' => 'required',
            'qualityservices' => 'required',
            'faciliteis' => 'required',
            'staff' => 'required',
            'flexibility' => 'required',
            'valueofmoney' => 'required',
            'overallrating' => 'required'
        ]);

        $listownerid = $request->input('listownerid');
        $listid = $request->input('listid');
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');
        $review_text = $request->input('review_text');
        $review_name = $request->input('name');
        $review_email = $request->input('email');
        $qualityservices = $request->input('qualityservices');
        $faciliteis = $request->input('faciliteis');
        $staff = $request->input('staff');
        $flexibility = $request->input('flexibility');
        $valueofmoney = $request->input('valueofmoney');
        $overallrating = $request->input('overallrating');
        $date = date("Y/m/d");

        $userimage = DB::table('appusers')->select('userimage')->where('id',$userid)->get();
        
        foreach($userimage as  $userimage){
            $userimage = $userimage->userimage;
        }
        
        DB::table('listing_review')->insert(
            array(
                   'listownerid' => $listownerid,
                   'listid' => $listid,
                   'userid' => $userid,
                   'username' => $username,
                   'userimage' => $userimage,
                   'useremail' => $useremail,
                   'usertype' => $usertype,
                   'review_text' => $review_text,
                   'review_name' => $review_name,
                   'review_email' => $review_email,
                   'qualityservices' => $qualityservices,
                   'faciliteis' => $faciliteis,
                   'staff' => $staff,
                   'flexibility' => $flexibility,
                   'valueofmoney' => $valueofmoney,
                   'overallrating' => $overallrating,
                   'date' => $date
                   )
           );

           echo json_encode(['success'=>'Review addded successfully.']);
    }

    public function wishlistsave(Request $request){

        $userid = Session::get('userid');
        $listingid = $request->input('listingid');

        $listing_review_count = DB::table('listing_review')->where('listid', $listingid)->get();
        $listing_review_count = count($listing_review_count);

        $listing = DB::table('vendorlistings')->where('id', $listingid)->get();

        foreach($listing as $listing)
        {
            $name = $listing->title;
            $image = $listing->filebutton;
            $city = $listing->city;
            $state = $listing->state;
            $price = $listing->price;
            $seat = $listing->seat;
            $listing_review_count = $listing_review_count;
        }
        
        DB::table('wishlist')->insert(
            array(
                   'userid' => $userid,
                   'listingid' => $listingid,
                   'name' => $name,
                   'image' => $image,
                   'city' => $city,
                   'state' => $state,
                   'price' => $price,
                   'seat' => $seat,
                   'listing_review_count' => $listing_review_count
            )
       );

        echo json_encode(['success'=>'success']);
    }

}