<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WishList;
use Illuminate\Support\Facades\Auth;

class Whislist extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $wishlists = WishList::with('listings')->where('user_id', $user->id)->get();

        $count = WishList::with('listings')->where('user_id', $user->id)->count();

        return view(
            'couples.wishlist',
            ['users' => $user, 'wishlists' => $wishlists, 'count' => $count]
        );
    }

    public function cancel(Request $request)
    {
        $wishlistid = $request->input('wishlistid');
        WishList::where('id', $wishlistid)->delete();

        echo json_encode(['success' => 'success']);
    }
}
