<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\VendorListing;
use Illuminate\Support\Facades\Auth;

class Editlisting extends Controller
{
    public function index($id)
    {
        $user = Auth::user();
        $listing = VendorListing::where('id', $id)->get();

        return view('vendor.editlisting', [
            'users' => $user, 'listing' => $listing
        ]);
    }

    public function updatelist(Request $request)
    {
        $user = Auth::user();

        if (empty($_POST["groomlounge"])) {
            $groomlounge = "true";
        } else {
            $groomlounge = "false";
        }
        if (empty($_POST["bridalsuite"])) {
            $bridalsuite = "true";
        } else {
            $bridalsuite = "false";
        }
        if (empty($_POST["tableandchairs"])) {
            $tableandchairs = "true";
        } else {
            $tableandchairs = "false";
        }
        if (empty($_POST["getreadyrooms"])) {
            $getreadyrooms = "true";
        } else {
            $getreadyrooms = "false";
        }
        if (empty($_POST["eventrentals"])) {
            $eventrentals = "true";
        } else {
            $eventrentals = "false";
        }
        if (empty($_POST["outsidevendors"])) {
            $outsidevendors = "true";
        } else {
            $outsidevendors = "false";
        }
        if (empty($_POST["barservices"])) {
            $barservices = "true";
        } else {
            $barservices = "false";
        }
        if (empty($_POST["cateringservices"])) {
            $cateringservices = "true";
        } else {
            $cateringservices = "false";
        }
        if (empty($_POST["cleanup"])) {
            $cleanup = "true";
        } else {
            $cleanup = "false";
        }
        if (empty($_POST["eventplanner"])) {
            $eventplanner = "true";
        } else {
            $eventplanner = "false";
        }

        if (empty($_POST["wifi"])) {
            $wifi = "true";
        } else {
            $wifi = "false";
        }
        if (empty($_POST["petfriendly"])) {
            $petfriendly = "true";
        } else {
            $petfriendly = "false";
        }
        if (empty($_POST["accommodations"])) {
            $accommodations = "true";
        } else {
            $accommodations = "false";
        }

        $listid = $request->input('listid');
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

        if ($request->hasFile('filebutton')) {
            $file = $request->file('filebutton');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton = $filename;
        }

        if ($request->hasFile('filebutton2')) {
            $file = $request->file('filebutton2');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton2 = $filename;
        }

        if ($request->hasFile('filebutton3')) {
            $file = $request->file('filebutton3');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton3 = $filename;
        }

        if ($request->hasFile('filebutton4')) {
            $file = $request->file('filebutton4');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton4 = $filename;
        }

        if ($request->hasFile('filebutton5')) {
            $file = $request->file('filebutton5');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton5 = $filename;
        }

        if ($request->hasFile('filebutton6')) {
            $file = $request->file('filebutton6');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton6 = $filename;
        }

        $listing = VendorListing::where('id', $listid)->first();

        DB::table('vendor_listings')->where('id', $listid)->update(
            array(
                // 'id' => $listid, 
                'vendor_id'   =>   $user->id ?? $listing->vendor_id,
                'name'   =>   $user->name ?? $listing->name,
                'email'   =>   $user->email ?? $listing->email, 
                'type'   =>   $user->type ?? $listing->type,
                'title'   =>   $title ?? $listing->title,
                'Category'   =>   $Category ?? $listing->Category, 
                'seat'   =>   $seat ?? $listing->seat, 
                'price'   =>   $price ?? $listing->price,
                'address'   =>   $address ?? $listing->address,
                'city'   =>   $city ?? $listing->city,
                'postcode'   =>   $postcode ?? $listing->postcode,
                'state' => $state ?? $listing->state,
                'country' =>  $country ?? $listing->country,
                'editordata' => $editordata ?? $listing->editordata,
                'latitude' => $latitude ?? $listing->latitude,
                'longitude' => $longitude ?? $listing->longitude,
                'groomlounge' => $groomlounge ?? $listing->groomlounge,
                'bridalsuite' => $bridalsuite ?? $listing->bridalsuite,
                'tableandchairs'   =>   $tableandchairs ?? $listing->tableandchairs,
                'getreadyrooms'   =>   $getreadyrooms ?? $listing->getreadyrooms,
                'eventrentals'   =>   $eventrentals ?? $listing->eventrentals,
                'outsidevendors'   =>   $outsidevendors ?? $listing->outsidevendors,
                'barservices'   =>   $barservices ?? $listing->barservices,
                'cateringservices'   =>   $cateringservices ?? $listing->cateringservices,
                'cleanup'   =>   $cleanup ?? $listing->cleanup,
                'eventplanner'   =>   $eventplanner ?? $listing->eventplanner,
                'wifi' => $wifi ?? $listing->wifi,
                'petfriendly' => $petfriendly ?? $listing->petfriendly,
                'accommodations' => $accommodations ?? $listing->accommodations,
                'filebutton' => $filebutton ?? $listing->filebutton,
                'filebutton2' => $filebutton2 ?? $listing->filebutton2, 
                'filebutton3' => $filebutton3 ?? $listing->filebutton3,
                'filebutton4' =>  $filebutton4 ?? $listing->filebutton4,
                'filebutton5' => $filebutton5 ?? $listing->filebutton5,
                'filebutton6' => $filebutton6 ?? $listing->filebutton6,
                'video'   =>   $video ?? $listing->video,
                'facebook'   =>   $facebook ?? $listing->facebook,
                'twitter'   =>   $twitter ?? $listing->twitter,
                'instagram'   =>   $instagram ?? $listing->instagram,
                'youtube'   =>   $youtube ?? $listing->youtube
            )
        );

        return Redirect('editlisting-success')->withSuccess('List updated successfully');
    }
}
