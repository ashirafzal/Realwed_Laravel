<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Validator,Redirect,Response;
use App\Customer;
use App\Http\Controllers\Controller;

class AddListingController extends Controller
{
    public function index()
    {
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');
        return view('dashboardaddlisting');
    }

    public function save(Request $request)
    {
        request()->validate([
        'title' => 'required',
        'Category' => 'required',
        'seat' => 'required',
        'price' => 'required',
        'address' => 'required',
        'city' => 'required',
        'postcode' => 'required',
        'state' => 'required',
        'country' => 'required',
        'editordata' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'groomlounge' => 'nullable',
        'bridalsuite' => 'nullable',
        'tableandchairs' => 'nullable',
        'getreadyrooms' => 'nullable',
        'eventrentals' => 'nullable',
        'outsidevendors' => 'nullable',
        'barservices' => 'nullable',
        'cateringservices' => 'nullable',
        'cleanup' => 'nullable',
        'eventplanner' => 'nullable',
        'wifi' => 'nullable',
        'petfriendly' => 'nullable',
        'accommodations' => 'nullable',
        'filebutton' => 'nullable',
        'filebutton2' => 'nullable',
        'filebutton3' => 'nullable',
        'filebutton4' => 'nullable',
        'filebutton5' => 'nullable',
        'filebutton6' => 'nullable',
        'video' => 'nullable',
        'facebook' => 'required',
        'twitter' => 'nullable',
        'instagram' => 'required',
        'youtube' => 'nullable',
        ]);
        
        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if( empty($_POST["groomlounge"]) ) 
        { 
            $groomlounge = "true"; 
        }
        else 
        {
            $groomlounge = "false"; 
        }
        if( empty($_POST["bridalsuite"]) ) 
        { 
            $bridalsuite = "true"; 
        }
        else 
        {
            $bridalsuite = "false"; 
        }
        if( empty($_POST["tableandchairs"]) ) 
        { 
            $tableandchairs = "true"; 
        }
        else 
        {
            $tableandchairs = "false"; 
        }
        if( empty($_POST["getreadyrooms"]) ) 
        { 
            $getreadyrooms = "true"; 
        }
        else 
        {
            $getreadyrooms = "false"; 
        }
        if( empty($_POST["eventrentals"]) ) 
        { 
            $eventrentals = "true"; 
        }
        else 
        {
            $eventrentals = "false"; 
        }
        if( empty($_POST["outsidevendors"]) ) 
        { 
            $outsidevendors = "true"; 
        }
        else 
        {
            $outsidevendors = "false"; 
        }
        if( empty($_POST["barservices"]) ) 
        { 
            $barservices = "true"; 
        }
        else 
        {
            $barservices = "false"; 
        }
        if( empty($_POST["cateringservices"]) ) 
        { 
            $cateringservices = "true"; 
        }
        else 
        {
            $cateringservices = "false"; 
        }
        if( empty($_POST["cleanup"]) ) 
        { 
            $cleanup = "true"; 
        }
        else 
        {
            $cleanup = "false"; 
        }
        if( empty($_POST["eventplanner"]) ) 
        { 
            $eventplanner = "true"; 
        }
        else 
        {
            $eventplanner = "false"; 
        }

        if( empty($_POST["wifi"]) ) 
        { 
            $wifi = "true"; 
        }
        else 
        {
            $wifi = "false"; 
        }
        if( empty($_POST["petfriendly"]) ) 
        { 
            $petfriendly = "true"; 
        }
        else 
        {
            $petfriendly = "false"; 
        }
        if( empty($_POST["accommodations"]) ) 
        { 
            $accommodations = "true"; 
        }
        else 
        {
            $accommodations = "false"; 
        }

        /*
        $data = $request->all();
        $check = Vendorlistings::create($data);
        */

        $title = $request->input('title');
        $Category = $request->input('Category');
        $seat = $request->input('seat');
        $price = $request->input('price');
        $address = $request->input('address');
        $city = $request->input('city');
        $postcode = $request->input('postcode');
        $state = $request->input('state');
        $country = $request->input('country');
        $editordata = $request->input('editordata');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $filebutton = $request->file('filebutton');
        $filebutton2 = $request->file('filebutton2');
        $filebutton3 = $request->file('filebutton3');
        $filebutton4 = $request->file('filebutton4');
        $filebutton5 = $request->file('filebutton5');
        $filebutton6 = $request->file('filebutton6');
        $video = $request->input('video');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $youtube = $request->input('youtube');
        

        DB::table('vendorlistings')->insert(
            array(
                   'vendorid'   =>   $userid,
                   'name'   =>   $username,
                   'email'   =>   $useremail,
                   'type'   =>   $usertype,
                   'title'   =>   $title,
                   'Category'   =>   $Category,
                   'seat'   =>   $seat,
                   'price'   =>   $price,
                   'address'   =>   $address,
                   'city'   =>   $city,
                   'postcode'   =>   $postcode,
                   'state'   =>   $state,
                   'country'   =>   $country,
                   'editordata'   =>   $editordata,
                   'latitude'   =>   $latitude,
                   'longitude'   =>   $longitude,
                   'groomlounge'   =>   $groomlounge,
                   'bridalsuite'   =>   $bridalsuite,
                   'tableandchairs'   =>   $tableandchairs,
                   'getreadyrooms'   =>   $getreadyrooms,
                   'eventrentals'   =>   $eventrentals,
                   'outsidevendors'   =>   $outsidevendors,
                   'barservices'   =>   $barservices,
                   'cateringservices'   =>   $cateringservices,
                   'cleanup'   =>   $cleanup,
                   'eventplanner'   =>   $eventplanner,
                   'wifi'   =>   $wifi,
                   'petfriendly'   =>   $petfriendly,
                   'accommodations'   =>   $accommodations,
                   'filebutton'   =>   $filebutton,
                   'filebutton2'   =>   $filebutton2,
                   'filebutton3'   =>   $filebutton3,
                   'filebutton4'   =>   $filebutton4,
                   'filebutton5'   =>   $filebutton5,
                   'filebutton6'   =>   $filebutton6,
                   'video'   =>   $video,
                   'facebook'   =>   $facebook,
                   'twitter'   =>   $twitter,
                   'instagram'   =>   $instagram,
                   'youtube'   =>   $youtube,
            )
       );

        return Redirect::to("addlisting-success")->withSuccess('Record saved successfully');
        
    }
}