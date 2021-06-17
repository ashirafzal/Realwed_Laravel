<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingReview extends Model
{
    use SoftDeletes;
    protected $table = 'listing_review';
}
