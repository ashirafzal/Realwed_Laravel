<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class Budget extends Controller
{
    public function index(Request $request){

        $userid = Session::get('userid');
        $username = Session::get('username');
        $useremail = Session::get('useremail');
        $usertype = Session::get('usertype');

        if(!$request->session()->has('userid')) {
            return Redirect::route('signintocontinue');
        }else{
            
            $venue = DB::table('venue')->where('coupleid',$userid)->get();
            $cake = DB::table('cake')->where('coupleid',$userid)->get();
            $ceremony = DB::table('ceremony')->where('coupleid',$userid)->get();
            $printedmaterials = DB::table('printedmaterials')->where('coupleid',$userid)->get();
            $photography = DB::table('photography')->where('coupleid',$userid)->get();
            $flowers = DB::table('flowers')->where('coupleid',$userid)->get();
            $hairandmakeup = DB::table('hairandmakeup')->where('coupleid',$userid)->get();
            $users = DB::table('appusers')->where('id',$userid)->get();
            return view('couple_budget',['users'=>$users ,'venue'=>$venue ,'ceremony'=>$ceremony ,
            'printedmaterials'=>$printedmaterials ,'photography'=>$photography 
            ,'flowers'=>$flowers ,'hairandmakeup'=>$hairandmakeup ,'cake'=>$cake]);
        }
    }

    public function savebudget(Request $request){

        $userid = Session::get('userid');
        $recordstatus = DB::select("select * from venue where coupleid = '".$userid."' ");
        $count = count($recordstatus);

        if($count > 0)
        {
            echo json_encode(['success'=>'Budget already added please edit budget or delete previous budget to add new budget .']);
        }else
        {
            $coupleid = Session::get('userid');

            $locationfees = $request->input('locationfees');
            $locationfees_estimate = $request->input('locationfees_estimate');
            $locationfees_actual = $request->input('locationfees_actual');
            $locationfees_paid = $request->input('locationfees_paid');
            $locationfees_pending = $request->input('locationfees_pending');

            $carexpense = $request->input('carexpense');
            $carexpense_estimate = $request->input('carexpense_estimate');
            $carexpense_actual = $request->input('carexpense_actual');
            $carexpense_paid = $request->input('carexpense_paid');
            $carexpense_pending = $request->input('carexpense_pending');

            $estimate_total = $locationfees_estimate + $carexpense_estimate;
            $actual_total = $locationfees_actual + $carexpense_actual;
            $paid_total = $locationfees_paid + $carexpense_paid;
            $pending_total = $locationfees_pending + $carexpense_pending;

            DB::table('venue')->insert(
                array(
                       'coupleid'   =>   $coupleid,
                       'locationfees'   =>   $locationfees,
                       'locationfees_estimate'   =>   $locationfees_estimate,
                       'locationfees_actual'   =>   $locationfees_actual,
                       'locationfees_paid'   =>   $locationfees_paid,
                       'locationfees_pending'   =>   $locationfees_pending,
                       'carexpense'   =>   $carexpense,
                       'carexpense_estimate'   =>   $carexpense_estimate,
                       'carexpense_actual'   =>   $carexpense_actual,
                       'carexpense_paid'   =>   $carexpense_paid,
                       'carexpense_pending'   =>   $carexpense_pending,
                       'estimate_total'   =>   $estimate_total,
                       'actual_total'   =>   $actual_total,
                       'paid_total'   =>   $paid_total,
                       'pending_total'   =>   $pending_total
                )
           );

            $decorations = $request->input('decorations');
            $decorations_estimate = $request->input('decorations_estimate');
            $decorations_actual = $request->input('decorations_actual');
            $decorations_paid = $request->input('decorations_paid');
            $decorations_pending = $request->input('decorations_pending');

            $locationfee = $request->input('locationfee');
            $locationfee_estimate = $request->input('locationfee_estimate');
            $locationfee_actual = $request->input('locationfee_actual');
            $locationfee_paid = $request->input('locationfee_paid');
            $locationfee_pending = $request->input('locationfee_pending');           
            
            $ceremony_estimate_total = $decorations_estimate + $locationfee_estimate;
            $ceremony_actual_total = $decorations_actual + $locationfee_actual;
            $ceremony_paid_total = $decorations_paid + $locationfee_paid;
            $ceremony_pending_total = $decorations_pending + $locationfee_pending;

            DB::table('ceremony')->insert(
                array(
                       'coupleid'   =>   $coupleid,                     
                       'decorations'   =>   $decorations,
                       'decorations_estimate'   =>   $decorations_estimate,
                       'decorations_actual'   =>   $decorations_actual,
                       'decorations_paid'   =>   $decorations_paid,
                       'decorations_pending'   =>   $decorations_pending,
                       'locationfee'   =>   $locationfee,
                       'locationfee_estimate'   =>   $locationfee_estimate,
                       'locationfee_actual'   =>   $locationfee_actual,
                       'locationfee_paid'   =>   $locationfee_paid,
                       'locationfee_pending'   =>   $locationfee_pending,
                       'estimate_total'   =>   $ceremony_estimate_total,
                       'actual_total'   =>   $ceremony_actual_total,
                       'paid_total'   =>   $ceremony_paid_total,
                       'pending_total'   =>   $ceremony_pending_total
                )
           );

            $hairandmakeup = $request->input('hairandmakeup');
            $hairandmakeup_estimate = $request->input('hairandmakeup_estimate');
            $hairandmakeup_actual = $request->input('hairandmakeup_actual');
            $hairandmakeup_paid = $request->input('hairandmakeup_paid');
            $hairandmakeup_pending = $request->input('hairandmakeup_pending');          
            
            $hairandmakeup_estimate_total = $hairandmakeup_estimate;
            $hairandmakeup_actual_total = $hairandmakeup_actual;
            $hairandmakeup_paid_total = $hairandmakeup_paid;
            $hairandmakeup_pending_total = $hairandmakeup_pending;

            DB::table('hairandmakeup')->insert(
                array(
                       'coupleid'   =>   $coupleid,                     
                       'hairandmakeup'   =>   $hairandmakeup,
                       'hairandmakeup_estimate'   =>   $hairandmakeup_estimate,
                       'hairandmakeup_actual'   =>   $hairandmakeup_actual,
                       'hairandmakeup_paid'   =>   $hairandmakeup_paid,
                       'hairandmakeup_pending'   =>   $hairandmakeup_pending,
                       'estimate_total'   =>   $hairandmakeup_estimate_total,
                       'actual_total'   =>   $hairandmakeup_actual_total,
                       'paid_total'   =>   $hairandmakeup_paid_total,
                       'pending_total'   =>   $hairandmakeup_pending_total
                )
           );

            $bouquets = $request->input('bouquets');
            $bouquets_estimate = $request->input('bouquets_estimate');
            $bouquets_actual = $request->input('bouquets_actual');
            $bouquets_paid = $request->input('bouquets_paid');
            $bouquets_pending = $request->input('bouquets_pending');

            $decorations2 = $request->input('decorations2');
            $decorations2_estimate = $request->input('decorations2_estimate');
            $decorations2_actual = $request->input('decorations2_actual');
            $decorations2_paid = $request->input('decorations2_paid');
            $decorations2_pending = $request->input('decorations2_pending');           
            
            $flowers_estimate_total = $bouquets_estimate + $decorations2_estimate;
            $flowers_actual_total = $bouquets_actual + $decorations2_actual;
            $flowers_paid_total = $bouquets_paid + $decorations2_paid;
            $flowers_pending_total = $bouquets_pending + $decorations2_pending;

            DB::table('flowers')->insert(
                array(
                       'coupleid'   =>   $coupleid,                     
                       'decorations2'   =>   $decorations2,
                       'decorations2_estimate'   =>   $decorations2_estimate,
                       'decorations2_actual'   =>   $decorations2_actual,
                       'decorations2_paid'   =>   $decorations2_paid,
                       'decorations2_pending'   =>   $decorations2_pending,
                       'bouquets'   =>   $bouquets,
                       'bouquets_estimate'   =>   $bouquets_estimate,
                       'bouquets_actual'   =>   $bouquets_actual,
                       'bouquets_paid'   =>   $bouquets_paid,
                       'bouquets_pending'   =>   $bouquets_pending,
                       'estimate_total'   =>   $ceremony_estimate_total,
                       'actual_total'   =>   $ceremony_actual_total,
                       'paid_total'   =>   $ceremony_paid_total,
                       'pending_total'   =>   $ceremony_pending_total
                )
           );

            $photographer = $request->input('photographer');
            $photographer_estimate = $request->input('photographer_estimate');
            $photographer_actual = $request->input('photographer_actual');
            $photographer_paid = $request->input('photographer_paid');
            $photographer_pending = $request->input('photographer_pending');

            $videographer = $request->input('videographer');
            $videographer_estimate = $request->input('videographer_estimate');
            $videographer_actual = $request->input('videographer_actual');
            $videographer_paid = $request->input('videographer_paid');
            $videographer_pending = $request->input('videographer_pending');  
            
            $extraprints = $request->input('extraprints');
            $extraprints_estimate = $request->input('extraprints_estimate');
            $extraprints_actual = $request->input('extraprints_actual');
            $extraprints_paid = $request->input('extraprints_paid');
            $extraprints_pending = $request->input('extraprints_pending');
            
            $photographer_estimate_total = $photographer_estimate + $videographer_estimate + $extraprints_estimate;
            $photographer_actual_total = $photographer_actual + $videographer_actual + $extraprints_actual;
            $photographer_paid_total = $photographer_paid + $videographer_paid + $extraprints_paid;
            $photographer_pending_total = $photographer_pending + $videographer_pending + $extraprints_pending;

            DB::table('photography')->insert(
                array(
                       'coupleid'   =>   $coupleid,                     
                       'photographer'   =>   $photographer,
                       'photographer_estimate'   =>   $photographer_estimate,
                       'photographer_actual'   =>   $photographer_actual,
                       'photographer_paid'   =>   $photographer_paid,
                       'photographer_pending'   =>   $photographer_pending,
                       'videographer'   =>   $videographer,
                       'videographer_estimate'   =>   $videographer_estimate,
                       'videographer_actual'   =>   $videographer_actual,
                       'videographer_paid'   =>   $videographer_paid,
                       'videographer_pending'   =>   $videographer_pending,
                       'extraprints'   =>   $extraprints,
                       'extraprints_estimate'   =>   $extraprints_estimate,
                       'extraprints_actual'   =>   $extraprints_actual,
                       'extraprints_paid'   =>   $extraprints_paid,
                       'extraprints_pending'   =>   $extraprints_pending,
                       'estimate_total'   =>   $photographer_estimate_total,
                       'actual_total'   =>   $photographer_actual_total,
                       'paid_total'   =>   $photographer_paid_total,
                       'pending_total'   =>   $photographer_pending_total
                )
           );

            $savethedates = $request->input('savethedates');
            $savethedates_estimate = $request->input('savethedates_estimate');
            $savethedates_actual = $request->input('savethedates_actual');
            $savethedates_paid = $request->input('savethedates_paid');
            $savethedates_pending = $request->input('savethedates_pending');

            $invitations = $request->input('invitations');
            $invitations_estimate = $request->input('invitations_estimate');
            $invitations_actual = $request->input('invitations_actual');
            $invitations_paid = $request->input('invitations_paid');
            $invitations_pending = $request->input('invitations_pending');  
            
            $weddingprograms = $request->input('weddingprograms');
            $weddingprograms_estimate = $request->input('weddingprograms_estimate');
            $weddingprograms_actual = $request->input('weddingprograms_actual');
            $weddingprograms_paid = $request->input('weddingprograms_paid');
            $weddingprograms_pending = $request->input('weddingprograms_pending');
            
            $printedmaterials_estimate_total = $savethedates_estimate + $invitations_estimate + $weddingprograms_estimate;
            $printedmaterials_actual_total = $savethedates_actual + $invitations_actual + $weddingprograms_actual;
            $printedmaterials_paid_total = $savethedates_paid + $invitations_paid + $weddingprograms_paid;
            $printedmaterials_pending_total = $savethedates_pending + $invitations_pending + $weddingprograms_pending;

            DB::table('printedmaterials')->insert(
                array(
                       'coupleid'   =>   $coupleid,                     
                       'savethedates'   =>   $savethedates,
                       'savethedates_estimate'   =>   $savethedates_estimate,
                       'savethedates_actual'   =>   $savethedates_actual,
                       'savethedates_paid'   =>   $savethedates_paid,
                       'savethedates_pending'   =>   $savethedates_pending,
                       'invitations'   =>   $invitations,
                       'invitations_estimate'   =>   $invitations_estimate,
                       'invitations_actual'   =>   $invitations_actual,
                       'invitations_paid'   =>   $invitations_paid,
                       'invitations_pending'   =>   $invitations_pending,
                       'weddingprograms'   =>   $weddingprograms,
                       'weddingprograms_estimate'   =>   $weddingprograms_estimate,
                       'weddingprograms_actual'   =>   $weddingprograms_actual,
                       'weddingprograms_paid'   =>   $weddingprograms_paid,
                       'weddingprograms_pending'   =>   $weddingprograms_pending,
                       'estimate_total'   =>   $printedmaterials_estimate_total,
                       'actual_total'   =>   $printedmaterials_actual_total,
                       'paid_total'   =>   $printedmaterials_paid_total,
                       'pending_total'   =>   $printedmaterials_pending_total
                )
           );

           $cakecuttingfee = $request->input('cakecuttingfee');
           $cakecuttingfee_estimate = $request->input('cakecuttingfee_estimate');
           $cakecuttingfee_actual = $request->input('cakecuttingfee_actual');
           $cakecuttingfee_paid = $request->input('cakecuttingfee_paid');
           $cakecuttingfee_pending = $request->input('cakecuttingfee_pending');          
           
           $cakecuttingfee_estimate_total = $cakecuttingfee_estimate;
           $cakecuttingfee_actual_total = $cakecuttingfee_actual;
           $cakecuttingfee_paid_total = $cakecuttingfee_paid;
           $cakecuttingfee_pending_total = $cakecuttingfee_pending;

           DB::table('cake')->insert(
               array(
                      'coupleid'   =>   $coupleid,                     
                      'cakecuttingfee'   =>   $cakecuttingfee,
                      'cakecuttingfee_estimate'   =>   $cakecuttingfee_estimate,
                      'cakecuttingfee_actual'   =>   $cakecuttingfee_actual,
                      'cakecuttingfee_paid'   =>   $cakecuttingfee_paid,
                      'cakecuttingfee_pending'   =>   $cakecuttingfee_pending,
                      'estimate_total'   =>   $cakecuttingfee_estimate_total,
                      'actual_total'   =>   $cakecuttingfee_actual_total,
                      'paid_total'   =>   $cakecuttingfee_paid_total,
                      'pending_total'   =>   $cakecuttingfee_pending_total
               )
          );

            echo json_encode(['success'=>'Budget details saved .']);
        }
        
    }

    public function deletebudget(Request $request){

        $userid = Session::get('userid');
        $recordstatus = DB::select("select * from venue where coupleid = '".$userid."' ");
        $count = count($recordstatus);

        if($count > 0)
        {
            DB::select("delete from venue where coupleid = '".$userid."' ");
            DB::select("delete from ceremony where coupleid = '".$userid."' ");
            DB::select("delete from hairandmakeup where coupleid = '".$userid."' ");
            DB::select("delete from flowers where coupleid = '".$userid."' ");
            DB::select("delete from cake where coupleid = '".$userid."' ");
            DB::select("delete from photography where coupleid = '".$userid."' ");
            DB::select("delete from printedmaterials where coupleid = '".$userid."' ");
            echo json_encode(['success'=>'Budget record deleted.']);
        }else
        {
            echo json_encode(['success'=>'Budget record not present.']);
        }
        
    }

}