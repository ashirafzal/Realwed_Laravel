<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeatingEight extends Model
{
    use SoftDeletes;

    protected $table = 'seating_eight';
}
