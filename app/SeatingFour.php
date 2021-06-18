<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatingFour extends Model
{
    use SoftDeletes;

    protected $table = 'seating_four';
}
