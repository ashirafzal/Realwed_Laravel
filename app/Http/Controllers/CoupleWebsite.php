<?php

namespace App\Http\Controllers;

use App\CoupleWebsite as AppCoupleWebsite;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoupleWebsite extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $couplewebsite = AppCoupleWebsite::where('couple_id', $user->id)
            ->get();

        return view('couples.couple-dashboard-website', [
            'users' => $user, 'couplewebsite' => $couplewebsite
        ]);
    }

    public function submit_website(Request $request)
    {
        
        $user = Auth::user();

        $couplename = $request->input('couplename');
        $weddingdate = $request->input('weddingdate');
        $weddingplace = $request->input('weddingplace');
        $weddingaddress = $request->input('weddingaddress');
        $contactemail = $request->input('contactemail');
        $contactnumber = $request->input('contactnumber');
        $whatsapp = $request->input('whatsapp');
        $yourstory = $request->input('yourstory');
        $yourproposal = $request->input('yourproposal');

        if ($request->hasFile('rsvpformpic')) {
            $file = $request->file('rsvpformpic');
            $extention = $file->clientExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $rsvpformpic = $filename;
        }

        if ($request->hasFile('filebutton2')) {
            $file = $request->file('filebutton2');
            $extention = $file->clientExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton2 = $filename;
        }

        if ($request->hasFile('filebutton3')) {
            $file = $request->file('filebutton3');
            $extention = $file->clientExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton3 = $filename;
        }

        if ($request->hasFile('filebutton4')) {
            $file = $request->file('filebutton4');
            $extention = $file->clientExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $filebutton4 = $filename;
        }

        $CoupleWebsite = new AppCoupleWebsite();

        $CoupleWebsite->couple_id = $user->id;
        $CoupleWebsite->couple_email = $user->email;
        $CoupleWebsite->couple_name = $couplename;
        $CoupleWebsite->wedding_date = $weddingdate;
        $CoupleWebsite->wedding_place = $weddingplace;
        $CoupleWebsite->wedding_address = $weddingaddress;
        $CoupleWebsite->contact_email = $contactemail;
        $CoupleWebsite->contact_number = $contactnumber;
        $CoupleWebsite->whatsapp = $whatsapp;
        $CoupleWebsite->your_story = $yourstory;
        $CoupleWebsite->your_proposal = $yourproposal;
        $CoupleWebsite->rsvp_form_pic = $rsvpformpic;
        $CoupleWebsite->file_button2 = $filebutton2;
        $CoupleWebsite->file_button3 = $filebutton3;
        $CoupleWebsite->file_button4 = $filebutton4;

        $CoupleWebsite->save();

        echo json_encode(['success' => 'Wedding website has been created']);
    
    }

    public function website($id)
    {
        $weddingwebsite = AppCoupleWebsite::where('id', $id)
            ->get();

        return view(
            'weddingwebsite',
            ['weddingwebsite' => $weddingwebsite]
        );
    }
}
