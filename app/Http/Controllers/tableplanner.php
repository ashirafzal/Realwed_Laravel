<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class tableplanner extends Controller
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
            $guestlist_single = DB::table('guestlist_single')->where('coupleid',$userid)->get();
            $guestlist_couple = DB::table('guestlist_couple')->where('coupleid',$userid)->get();
            $guestlist_household = DB::table('guestlist_household')->where('coupleid',$userid)->get();      
            return view('couple_tableplanner',['users'=>$users , 'guestlist_single'=>$guestlist_single ,
            'guestlist_couple'=>$guestlist_couple ,'guestlist_household'=>$guestlist_household]);
        }
    }

    public function createtable(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        $tablename = $request->input('tablename');
        $seating_capacity = $request->input('seating_capacity');
        $seating = $request->input('seating');

        /* Couting seating capactiy */
        $seating_capacity_count = count($seating_capacity);

        if($seating_capacity_count < 1){
            echo json_encode("Please select a seating count for the table");
        }else if($seating_capacity_count > 1){
            echo json_encode("Please provide a single seating value for the table");
        }
        else
        {
            if($seating_capacity[0] <= 4)
            {    
                $seating_count = count($seating);

                if($seating_count < 1){
                    $guest1 = "";$guest2 = "";$guest3 = "";$guest4 = "";
                }
                else if($seating_count < 2){
                    $guest1 = $seating[0];$guest2 = "";$guest3 = "";$guest4 = "";
                }
                else if($seating_count < 3){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 = "";$guest4 = "";
                }
                else if($seating_count < 4){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = "";
                }
                else if($seating_count < 5){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                }

                DB::table('seatingfour')->insert(
                    array(
                           'coupleid'   =>   $userid,
                           'tablename'   =>   $tablename,
                           'seatingcapacity'   =>   "4",
                           'guest1'   =>   $guest1,
                           'guest2'   =>   $guest2,
                           'guest3'   =>   $guest3,
                           'guest4'   =>   $guest4
                    )
               );

               echo json_encode("Table seating saved for 4 peoples");

            }
            else if($seating_capacity[0] >= 4 && $seating_capacity[0] <= 8)
            {               
                $seating_count = count($seating);

                if($seating_count < 1){
                    $guest1 = "";$guest2 = "";$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 2){
                    $guest1 = $seating[0];$guest2 = "";$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 3){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 4){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 5){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = "";$guest6 = "";$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 6){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = "";$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 7){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 8){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = "";
                }
                else if($seating_count < 9){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                }

                DB::table('seatingeight')->insert(
                    array(
                           'coupleid'   =>   $userid,
                           'tablename'   =>   $tablename,
                           'seatingcapacity'   =>   "8",
                           'guest1'   =>   $guest1,
                           'guest2'   =>   $guest2,
                           'guest3'   =>   $guest3,
                           'guest4'   =>   $guest4,
                           'guest5'   =>   $guest5,
                           'guest6'   =>   $guest6,
                           'guest7'   =>   $guest7,
                           'guest8'   =>   $guest8
                    )
               );

               echo json_encode("Table seating saved for 8 peoples");

            }
            else if($seating_capacity[0] >= 8 && $seating_capacity[0] <= 11)
            {
                $seating_count = count($seating);

                if($seating_count < 1){
                    $guest1 = "";$guest2 = "";$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 2){
                    $guest1 = $seating[0];$guest2 = "";$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 3){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 4){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 5){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = "";$guest6 = "";$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 6){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = "";$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 7){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 8){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = "";
                }
                else if($seating_count < 9){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                }
                else if($seating_count < 10){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = "";$guest11 = "";$guest12 = "";
                }
                else if($seating_count < 11){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = $seating[9];$guest11 = "";$guest12 = "";
                }
                else if($seating_count < 12){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = $seating[9];$guest11 = $seating[10];$guest12 = "";
                }
                else if($seating_count < 13){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = $seating[9];$guest11 = $seating[10];$guest12 = $seating[11];
                }


                DB::table('seatingtwelve')->insert(
                    array(
                           'coupleid'   =>   $userid,
                           'tablename'   =>   $tablename,
                           'seatingcapacity'   =>   "12",
                           'guest1'   =>   $guest1,
                           'guest2'   =>   $guest2,
                           'guest3'   =>   $guest3,
                           'guest4'   =>   $guest4,
                           'guest5'   =>   $guest5,
                           'guest6'   =>   $guest6,
                           'guest7'   =>   $guest7,
                           'guest8'   =>   $guest8,
                           'guest9'   =>   $guest9,
                           'guest10'   =>   $guest10,
                           'guest11'   =>   $guest11,
                           'guest12'   =>   $guest12
                    )
               );

                echo json_encode("Table seating saved for 12 peoples");

            }else if($seating_capacity[0] == 12)
            {
                $seating_count = count($seating);

                if($seating_count < 1){
                    $guest1 = "";$guest2 = "";$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 2){
                    $guest1 = $seating[0];$guest2 = "";$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 3){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 = "";$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 4){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = "";$guest5 = "";$guest6 = "";
                    $guest7 = "";$guest8 = "";
                }
                else if($seating_count < 5){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = "";$guest6 = "";$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 6){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = "";$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 7){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 = "";$guest8 = "";
                }
                else if($seating_count < 8){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = "";
                }
                else if($seating_count < 9){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                }
                else if($seating_count < 10){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = "";$guest11 = "";$guest12 = "";
                }
                else if($seating_count < 11){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = $seating[9];$guest11 = "";$guest12 = "";
                }
                else if($seating_count < 12){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = $seating[9];$guest11 = $seating[10];$guest12 = "";
                }
                else if($seating_count < 13){
                    $guest1 = $seating[0];$guest2 =  $seating[1];$guest3 =  $seating[2];$guest4 = $seating[3];
                    $guest5 = $seating[4];$guest6 = $seating[5];$guest7 =  $seating[6];$guest8 = $seating[7];
                    $guest9 = $seating[8];$guest10 = $seating[9];$guest11 = $seating[10];$guest12 = $seating[11];
                }

                DB::table('seatingtwelve')->insert(
                    array(
                           'coupleid'   =>   $userid,
                           'tablename'   =>   $tablename,
                           'seatingcapacity'   =>   "12",
                           'guest1'   =>   $guest1,
                           'guest2'   =>   $guest2,
                           'guest3'   =>   $guest3,
                           'guest4'   =>   $guest4,
                           'guest5'   =>   $guest5,
                           'guest6'   =>   $guest6,
                           'guest7'   =>   $guest7,
                           'guest8'   =>   $guest8,
                           'guest9'   =>   $guest9,
                           'guest10'   =>   $guest10,
                           'guest11'   =>   $guest11,
                           'guest12'   =>   $guest12
                    )
               );

                echo json_encode("Table seating saved for 12 peoples");

            }else if($seating_capacity[0] > 12)
            {
                echo json_encode("You cannot select more than 12 people for a single seat.");
            }
            else{
                echo json_encode("Please select atleast a single person.");
            }
        }
    }
    
}