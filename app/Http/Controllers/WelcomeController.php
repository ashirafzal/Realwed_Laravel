<?php

namespace App\Http\Controllers;

use App\CoupleWebsite;
use App\Http\Controllers\Controller;
use App\VendorListing;

class WelcomeController extends Controller
{
    public function index()
    {
        $Listing = VendorListing::orderBy('id')
            ->take(10)
            ->get();

        $CoupleWebsite = CoupleWebsite::orderBy('id')
            ->take(10)
            ->get();

        return view('general.welcome', [
            'listing' => $Listing,
            'couplewebsite' => $CoupleWebsite,
        ]);
    }
}
