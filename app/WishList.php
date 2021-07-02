<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WishList extends Model
{
    use SoftDeletes;

    protected $table = 'wish_list';

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function listings()
    {
        return $this->hasMany(VendorListing::class,'id','listing_id');
    }

}