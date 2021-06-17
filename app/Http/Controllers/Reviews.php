<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ListingReview;
use Illuminate\Support\Facades\Auth;

class Reviews extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $qualityservices = ListingReview::where('list_ownerid', $user->id)
            ->avg('quality_services');

        $faciliteis = ListingReview::where('list_ownerid', $user->id)
            ->avg('faciliteis');

        $staff = ListingReview::where('list_ownerid', $user->id)
            ->avg('staff');

        $flexibility = ListingReview::where('list_ownerid', $user->id)
            ->avg('flexibility');

        $valueofmoney = ListingReview::where('list_ownerid', $user->id)
            ->avg('value_of_money');

        $overallrating = ListingReview::where('list_ownerid', $user->id)
            ->avg('overall_rating');

        $listing_review_count = ListingReview::where('list_ownerid', $user->id)
            ->get();

        $listing_review_count = count($listing_review_count);

        $listing_review = ListingReview::where('list_ownerid', $user->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('vendor.reviews', [
            'user' => $user, 'listing_review' => $listing_review, 'qualityservices' => $qualityservices,
            'faciliteis' => $faciliteis, 'staff' => $staff, 'flexibility' => $flexibility,
            'valueofmoney' => $valueofmoney, 'overallrating' => $overallrating,
            'listing_review_count' => $listing_review_count
        ]);
    }
}
