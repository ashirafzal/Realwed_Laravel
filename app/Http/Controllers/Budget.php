<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers\Controller;
use App\Cake;
use App\Ceremony;
use App\Flowers;
use App\HairAndMakeup;
use App\Photography;
use App\PrintedMaterials;
use Illuminate\Support\Facades\Auth;
use App\Venue;

class Budget extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $venue = Venue::where('couple_id', $user->id)
            ->get();

        $cake = Cake::where('couple_id', $user->id)
            ->get();

        $ceremony = Ceremony::where('couple_id', $user->id)
            ->get();

        $printedmaterials = PrintedMaterials::where('couple_id', $user->id)
            ->get();

        $photography = Photography::where('coupleid', $user->id)
            ->get();

        $flowers = Flowers::where('couple_id', $user->id)
            ->get();

        $hairandmakeup = HairAndMakeup::where('couple_id', $user->id)
            ->get();

        return view(
            'couples.couple_budget',
            [
                'users' => $user, 'venue' => $venue, 'ceremony' => $ceremony,
                'printedmaterials' => $printedmaterials, 'photography' => $photography, 'flowers' => $flowers, 'hairandmakeup' => $hairandmakeup, 'cake' => $cake
            ]
        );
    }

    public function savebudget(Request $request)
    {

        $user = Auth::user();
        $recordstatus = Venue::where('couple_id', $user->id)->get();
        $count = count($recordstatus);

        if ($count > 0) {
            echo json_encode(['success' => 'Budget already added please edit budget or delete previous budget to add new budget .']);
        } else {
            $coupleid = $user;

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

            $venue = new Venue();

            $venue->couple_id = $coupleid;
            $venue->locationfees = $locationfees;
            $venue->locationfees_estimate = $locationfees_estimate;
            $venue->locationfees_actual = $locationfees_actual;
            $venue->locationfees_paid  = $locationfees_paid;
            $venue->locationfees_pending = $locationfees_pending;
            $venue->carexpense = $carexpense;
            $venue->carexpense_estimate = $carexpense_estimate;
            $venue->carexpense_actual  = $carexpense_actual;
            $venue->carexpense_paid  = $carexpense_paid;
            $venue->carexpense_pending = $carexpense_pending;
            $venue->estimate_total = $estimate_total;
            $venue->actual_total = $actual_total;
            $venue->paid_total = $paid_total;
            $venue->pending_total = $pending_total;

            $venue->save();

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

            $Ceremony = new Ceremony();

            $Ceremony->couple_id = $coupleid;
            $Ceremony->decorations = $decorations;
            $Ceremony->decorations_estimate = $decorations_estimate;
            $Ceremony->decorations_actual = $decorations_actual;
            $Ceremony->decorations_paid = $decorations_paid;
            $Ceremony->decorations_pending = $decorations_pending;
            $Ceremony->locationfee = $locationfee;
            $Ceremony->locationfee_estimate = $locationfee_estimate;
            $Ceremony->locationfee_actual = $locationfee_actual;
            $Ceremony->locationfee_paid = $locationfee_paid;
            $Ceremony->locationfee_pending = $locationfee_pending;
            $Ceremony->estimate_total = $ceremony_estimate_total;
            $Ceremony->actual_total = $ceremony_actual_total;
            $Ceremony->paid_total = $ceremony_paid_total;
            $Ceremony->pending_total = $ceremony_pending_total;

            $Ceremony->save();

            $hairandmakeup = $request->input('hairandmakeup');
            $hairandmakeup_estimate = $request->input('hairandmakeup_estimate');
            $hairandmakeup_actual = $request->input('hairandmakeup_actual');
            $hairandmakeup_paid = $request->input('hairandmakeup_paid');
            $hairandmakeup_pending = $request->input('hairandmakeup_pending');

            $hairandmakeup_estimate_total = $hairandmakeup_estimate;
            $hairandmakeup_actual_total = $hairandmakeup_actual;
            $hairandmakeup_paid_total = $hairandmakeup_paid;
            $hairandmakeup_pending_total = $hairandmakeup_pending;

            $HairAndMakeup = new HairAndMakeup();

            $HairAndMakeup->couple_id = $coupleid;
            $HairAndMakeup->hairandmakeup = $hairandmakeup;
            $HairAndMakeup->hairandmakeup_estimate = $hairandmakeup_estimate;
            $HairAndMakeup->hairandmakeup_actual = $hairandmakeup_actual;
            $HairAndMakeup->hairandmakeup_paid = $hairandmakeup_paid;
            $HairAndMakeup->hairandmakeup_pending = $hairandmakeup_pending;
            $HairAndMakeup->estimate_total = $hairandmakeup_estimate_total;
            $HairAndMakeup->actual_total = $hairandmakeup_actual_total;
            $HairAndMakeup->paid_total = $hairandmakeup_paid_total;
            $HairAndMakeup->pending_total = $hairandmakeup_pending_total;

            $HairAndMakeup->save();

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

            $Flowers = new Flowers();

            $Flowers->couple_id = $coupleid;
            $Flowers->decorations2 = $decorations2;
            $Flowers->decorations2_estimate = $decorations2_estimate;
            $Flowers->decorations2_actual = $decorations2_actual;
            $Flowers->decorations2_paid  = $decorations2_paid;
            $Flowers->decorations2_pending = $decorations2_pending;
            $Flowers->bouquets = $bouquets;
            $Flowers->bouquets_estimate = $bouquets_estimate;
            $Flowers->bouquets_actual = $bouquets_actual;
            $Flowers->bouquets_paid = $bouquets_paid;
            $Flowers->bouquets_pending = $bouquets_pending;
            $Flowers->estimate_total = $ceremony_estimate_total;
            $Flowers->actual_total = $ceremony_actual_total;
            $Flowers->paid_total = $ceremony_paid_total;
            $Flowers->pending_total = $ceremony_pending_total;

            $Flowers->save();

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

            $Photography = new Photography();

            $Photography->coupleid = $coupleid;
            $Photography->photographer = $photographer;
            $Photography->photographer_estimate = $photographer_estimate;
            $Photography->photographer_actual = $photographer_actual;
            $Photography->photographer_paid = $photographer_paid;
            $Photography->photographer_pending = $photographer_pending;
            $Photography->videographer = $videographer;
            $Photography->videographer_estimate = $videographer_estimate;
            $Photography->videographer_actual = $videographer_actual;
            $Photography->videographer_paid = $videographer_paid;
            $Photography->videographer_pending = $videographer_pending;
            $Photography->extraprints = $extraprints;
            $Photography->extraprints_estimate = $extraprints_estimate;
            $Photography->extraprints_actual = $extraprints_actual;
            $Photography->extraprints_paid = $extraprints_paid;
            $Photography->extraprints_pending = $extraprints_pending;
            $Photography->estimate_total = $photographer_estimate_total;
            $Photography->actual_total = $photographer_actual_total;
            $Photography->paid_total = $photographer_paid_total;
            $Photography->pending_total = $photographer_pending_total;

            $Photography->save();

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

            $PrintedMaterials = new PrintedMaterials();

            $PrintedMaterials->couple_id = $coupleid;
            $PrintedMaterials->savethedates = $savethedates;
            $PrintedMaterials->savethedates_estimate = $savethedates_estimate;
            $PrintedMaterials->savethedates_actual = $savethedates_actual;
            $PrintedMaterials->savethedates_paid = $savethedates_paid;
            $PrintedMaterials->savethedates_pending = $savethedates_pending;
            $PrintedMaterials->invitations = $invitations;
            $PrintedMaterials->invitations_estimate = $invitations_estimate;
            $PrintedMaterials->invitations_actual = $invitations_actual;
            $PrintedMaterials->invitations_paid = $invitations_paid;
            $PrintedMaterials->invitations_pending = $invitations_pending;
            $PrintedMaterials->weddingprograms = $weddingprograms;
            $PrintedMaterials->weddingprograms_estimate = $weddingprograms_estimate;
            $PrintedMaterials->weddingprograms_actual = $weddingprograms_actual;
            $PrintedMaterials->weddingprograms_paid  = $weddingprograms_paid;
            $PrintedMaterials->weddingprograms_pending = $weddingprograms_pending;
            $PrintedMaterials->estimate_total = $printedmaterials_estimate_total;
            $PrintedMaterials->actual_total = $printedmaterials_actual_total;
            $PrintedMaterials->paid_total = $printedmaterials_paid_total;
            $PrintedMaterials->pending_total = $printedmaterials_pending_total;

            $PrintedMaterials->save();

            $cakecuttingfee = $request->input('cakecuttingfee');
            $cakecuttingfee_estimate = $request->input('cakecuttingfee_estimate');
            $cakecuttingfee_actual = $request->input('cakecuttingfee_actual');
            $cakecuttingfee_paid = $request->input('cakecuttingfee_paid');
            $cakecuttingfee_pending = $request->input('cakecuttingfee_pending');

            $cakecuttingfee_estimate_total = $cakecuttingfee_estimate;
            $cakecuttingfee_actual_total = $cakecuttingfee_actual;
            $cakecuttingfee_paid_total = $cakecuttingfee_paid;
            $cakecuttingfee_pending_total = $cakecuttingfee_pending;

            $Cake = new Cake();

            $Cake->couple_id = $coupleid;
            $Cake->cakecuttingfee =  $cakecuttingfee;
            $Cake->cakecuttingfee_estimate = $cakecuttingfee_estimate;
            $Cake->cakecuttingfee_actual = $cakecuttingfee_actual;
            $Cake->cakecuttingfee_paid = $cakecuttingfee_paid;
            $Cake->cakecuttingfee_pending = $cakecuttingfee_pending;
            $Cake->estimate_total = $cakecuttingfee_estimate_total;
            $Cake->actual_total = $cakecuttingfee_actual_total;
            $Cake->paid_total = $cakecuttingfee_paid_total;
            $Cake->pending_total = $cakecuttingfee_pending_total;

            $Cake->save();

            echo json_encode(['success' => 'Budget details saved .']);
        }
    }

    public function deletebudget()
    {
        $user = Auth::user();
        $recordstatus = Venue::where('couple_id', $user->id)->get();
        $count = count($recordstatus);

        if ($count > 0) {
            Venue::where('couple_id', $user->id)->delete();
            Ceremony::where('couple_id', $user->id)->delete();
            HairAndMakeup::where('couple_id', $user->id)->delete();
            Flowers::where('couple_id', $user->id)->delete();
            Cake::where('couple_id', $user->id)->delete();
            Photography::where('coupleid', $user->id)->delete();
            PrintedMaterials::where('couple_id', $user->id)->delete();

            echo json_encode(['success' => 'Budget record deleted.']);
        } else {
            echo json_encode(['success' => 'Budget record not present.']);
        }
    }

}