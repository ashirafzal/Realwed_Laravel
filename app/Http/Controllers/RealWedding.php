<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealWedding as AppRealWedding;
use App\ShowRealWedding;
use Illuminate\Support\Facades\Auth;

class RealWedding extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view(
            'couples.couple-dashboard-realwedding',
            ['users' => $user]
        );
    }

    public function SaveRealWedding(Request $request)
    {

        $textarea = $request->input('textarea');

        if (isset($_POST['fromwebsite'])) {
            $formwebsite = 'checked';
        } else {
            $formwebsite = 'not checked';
        }

        if (isset($_POST['fromoutside'])) {
            $fromoutside = 'checked';
        } else {
            $fromoutside = 'not checked';
        }

        if (isset($_POST['both'])) {
            $both = 'checked';
        } else {
            $both = 'not checked';
        }

        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('userimage', $filename);
            $featured_image = $filename;
        }

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

        $user = Auth::user();

        $RealWedding = new AppRealWedding();

        $RealWedding->couple_id = $user->id;
        $RealWedding->couple_email = $user->email;
        $RealWedding->featured_image = $featured_image;
        $RealWedding->file_button = $filebutton;
        $RealWedding->file_button2 = $filebutton2;
        $RealWedding->file_button3 = $filebutton3;
        $RealWedding->file_button4 = $filebutton4;
        $RealWedding->file_button5 = $filebutton5;
        $RealWedding->file_button6 = $filebutton6;
        $RealWedding->from_website = $formwebsite;
        $RealWedding->from_outside = $fromoutside;
        $RealWedding->both = $both;
        $RealWedding->textarea = $textarea;

        $RealWedding->save();

        echo json_encode(['success' => 'Real wedding details saved']);
    }

    public function Showprofile()
    {
        $user = Auth::user();

        $showrealwedding = ShowRealWedding::where('couple_id', $user->id)->get();

        $count = count($showrealwedding);
        $showprofile = "show";

        if ($count > 0) {

            $showrealwedding->couple_id = $user->id;
            $showrealwedding->show_profile = $showprofile;
            $showrealwedding->save();
        } else {

            $NewShowRealWedding = new ShowRealWedding();

            $NewShowRealWedding->couple_id = $user->id;
            $NewShowRealWedding->show_profile = $showprofile;

            $NewShowRealWedding->save();
        }

        echo json_encode(['success' => 'Real wedding will be shown']);
    }

    public function Dontshowprofile(Request $request)
    {

        $user = Auth::user();;

        $showrealwedding = ShowRealWedding::where('couple_id', $user->id)->get();

        $count = count($showrealwedding);
        $showprofile = "notshow";

        if ($count > 0) {

            $showrealwedding->couple_id = $user->id;
            $showrealwedding->show_profile = $showprofile;
            $showrealwedding->save();
        } else {

            $NewShowRealWedding = new ShowRealWedding();

            $NewShowRealWedding->couple_id = $user->id;
            $NewShowRealWedding->show_profile = $showprofile;

            $NewShowRealWedding->save();
        }

        echo json_encode(['success' => 'Real wedding will not be shown']);
    }
}
