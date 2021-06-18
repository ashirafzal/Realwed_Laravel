<?php

namespace App\Http\Controllers;

use App\GuestListCouple;
use App\GuestListHousehold;
use App\GuestListSingle;
use App\Http\Controllers\Controller;
use App\SeatingEight;
use App\SeatingFour;
use App\SeatingTwelve;
use App\WishList;
use Illuminate\Support\Facades\Auth;

class CoupleDashboard extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $wishlist = WishList::all();
        $wishlist = count($wishlist);

        $seatingfour = SeatingFour::all();
        $seatingfour = count($seatingfour);
        $seatingfour = $seatingfour * 4;

        $seatingeight = SeatingEight::all();
        $seatingeight = count($seatingeight);
        $seatingeight = $seatingeight * 8;

        $seatingtwelve = SeatingTwelve::all();
        $seatingtwelve = count($seatingtwelve);
        $seatingtwelve = $seatingtwelve * 12;

        $guestlist_single = GuestListSingle::all();
        $guestlist_single = count($guestlist_single);

        $guestlist_couple = GuestListCouple::all();
        $guestlist_couple = count($guestlist_couple);

        $guestlist_household = GuestListHousehold::all();
        $guestlist_household = count($guestlist_household);

        $tableseatingtotal = $seatingfour + $seatingeight + $seatingtwelve;
        $guestlisttotal = $guestlist_single + $guestlist_couple + $guestlist_household;

        return view(
            'couples.coupledashboard',
            [
                'user' => $user, 'wishlist' => $wishlist, 'tableseatingtotal' => $tableseatingtotal, 'guestlisttotal' => $guestlisttotal
            ]
        );
    }
}
