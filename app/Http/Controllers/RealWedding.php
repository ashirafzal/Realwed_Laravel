<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class RealWedding extends Controller
{
    public function index(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $users = DB::table('appusers')->where('id',$userid)->get();
            return view('couple-dashboard-realwedding',['users'=>$users]); 
        }
    }

    public function SaveRealWedding(Request $request){
        
        $textarea = $request->input('textarea');

        if(isset($_POST['fromwebsite'])){
            $formwebsite = 'checked';
        }else{
            $formwebsite = 'not checked';
        }

        if(isset($_POST['fromoutside'])){
            $fromoutside = 'checked';
        }else{
            $fromoutside = 'not checked';
        }

        if(isset($_POST['both'])){
            $both = 'checked';
        }else{
            $both = 'not checked';
        }

        if($request->hasFile('featured_image'))
        {
            $file = $request->file('featured_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('userimage',$filename);
            $featured_image = $filename;
        }

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

        $userid = Session::get('userid');
        $useremail = Session::get('useremail');

        DB::table('realwedding')->insert(
            array(
                   'coupleid'   =>   $userid,
                   'coupleemail'   =>   $useremail,
                   'featured_image'   =>   $featured_image,
                   'filebutton'   =>   $filebutton,
                   'filebutton2'   =>   $filebutton2,
                   'filebutton3'   =>   $filebutton3,
                   'filebutton4'   =>   $filebutton4,
                   'filebutton5'   =>   $filebutton5,
                   'filebutton6'   =>   $filebutton6,
                   'fromwebsite'   =>   $formwebsite,
                   'fromoutside'   =>   $fromoutside,
                   'both'   =>   $both,
                   'textarea'   =>   $textarea,
            )
       );

       echo json_encode(['success'=>'Real wedding details saved']);
    }

    public function Showprofile(Request $request){

        $userid = Session::get('userid');

        $showrealwedding = DB::select("select * from showrealwedding where coupleid = '$userid' ");

        $count = count($showrealwedding);
        $showprofile = "show";

        if($count > 0){
            DB::table('showrealwedding')->where('coupleid',$userid)->update
                (array(
                    'coupleid' => $userid,
                    'showprofile' => $showprofile,
                ));
        }else{
            DB::table('showrealwedding')->insert(
                array(
                       'coupleid' => $userid,
                       'showprofile' => $showprofile,
                )
           );
        }

        echo json_encode(['success'=>'Real wedding will be shown']);
    }

    public function Dontshowprofile(Request $request){

        $userid = Session::get('userid');

        $showrealwedding = DB::select("select * from showrealwedding where coupleid = '$userid' ");

        $count = count($showrealwedding);
        $showprofile = "notshow";

        if($count > 0){
            DB::table('showrealwedding')->where('coupleid',$userid)->update
                (array(
                    'coupleid' => $userid,
                    'showprofile' => $showprofile,
                ));
        }else{
            DB::table('showrealwedding')->insert(
                array(
                       'coupleid' => $userid,
                       'showprofile' => $showprofile,
                )
           );
        }

        echo json_encode(['success'=>'Real wedding will not be shown']);
    }
}