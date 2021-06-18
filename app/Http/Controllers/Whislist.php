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

        $wishlist = WishList::where('user_id', $user->id)->get();

        return view(
            'wishlist',
            ['users' => $user, 'wishlist' => $wishlist]
        );
    }

    public function cancel(Request $request)
    {
        $wishlistid = $request->input('wishlistid');
        WishList::where('id', $wishlistid)->delete();

        echo json_encode(['success' => 'success']);
    }
}
