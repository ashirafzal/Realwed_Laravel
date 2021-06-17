<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\VendorListing;
use Illuminate\Support\Facades\Auth;

class AddListingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboardaddlisting',['users'=>$user]); 
    }

    public function save(Request $request)
    {   
        $user = Auth::user();

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
        $video = $request->input('video');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $youtube = $request->input('youtube');
        
        if($request->hasFile('filebutton'))
        {
            $file = $request->file('filebutton');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $filebutton = $filename;
        }

        if($request->hasFile('filebutton2'))
        {
            $file = $request->file('filebutton2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $filebutton2 = $filename;
        }

        if($request->hasFile('filebutton3'))
        {
            $file = $request->file('filebutton3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $filebutton3 = $filename;
        }

        if($request->hasFile('filebutton4'))
        {
            $file = $request->file('filebutton4');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $filebutton4 = $filename;
        }

        if($request->hasFile('filebutton5'))
        {
            $file = $request->file('filebutton5');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $filebutton5 = $filename;
        }

        if($request->hasFile('filebutton6'))
        {
            $file = $request->file('filebutton6');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $filebutton6 = $filename;
        }
        
        $listing = new VendorListing();

        $listing->vendorid = $user->id;
        $listing->name = $user->name;
        $listing->email = $user->email;
        $listing->type = $user->type;
        $listing->title = $title;
        $listing->category = $Category;
        $listing->seat = $seat;
        $listing->price = $price;
        $listing->address = $address;
        $listing->city = $city;
        $listing->postcode = $postcode;
        $listing->state = $state;
        $listing->country = $country;
        $listing->editordata = $editordata;
        $listing->latitude = $latitude;
        $listing->longitude = $longitude;
        $listing->groomlounge = $groomlounge;
        $listing->bridalsuite = $bridalsuite;
        $listing->tableandchairs = $tableandchairs;
        $listing->getreadyrooms = $getreadyrooms;
        $listing->eventrentals = $eventrentals;
        $listing->outsidevendors = $outsidevendors;
        $listing->barservices = $barservices;
        $listing->cateringservices = $cateringservices;
        $listing->cleanup = $cleanup;
        $listing->eventplanner = $eventplanner;
        $listing->wifi = $wifi;
        $listing->petfriendly = $petfriendly;
        $listing->accommodations = $accommodations;
        $listing->filebutton = $filebutton;
        $listing->filebutton2 = $filebutton2;
        $listing->filebutton3 = $filebutton3;
        $listing->filebutton4 = $filebutton4;
        $listing-> filebutton5 = $filebutton5;
        $listing->filebutton6 = $filebutton6;
        $listing->video = $video;
        $listing->facebook = $facebook;
        $listing->twitter = $twitter;
        $listing->instagram = $instagram;
        $listing->youtube = $youtube;

        $listing->save();

        return Redirect("addlisting-success")->withSuccess('Record saved successfully');
        
    }
}