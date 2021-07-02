<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class VendorListing extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_id',
        'name',
        'email',
        'type',
        'title',
        'Category',
        'seat',
        'price',
        'address',
        'city',
        'country'
    ];

    public function wishlist()
    {
        return $this->hasMany(WishList::class);
    }
}
