<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\VendorListing;
use Illuminate\Support\Facades\Auth;
use App\ListingReview;
use App\RequestQuotes;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if(!$user){
            return redirect('home');
        }

        $listing = VendorListing::where('vendor_id', $user->id)->get();
        $listing = count($listing);

        $listing_review_count = ListingReview::where('list_ownerid', $user->id)->get();
        $listing_review_count = count($listing_review_count);

        $requestquote_count = RequestQuotes::where('list_creator_id', $user->id)->orderBy('id', 'desc')->get();
        $requestquote_count = count($requestquote_count);

        return view('vendor.dashboard', [
            'users' => $user, 'listing' => $listing,
            'listing_review_count' => $listing_review_count,
            'requestquote_count' => $requestquote_count
        ]);
    }
}
