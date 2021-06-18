<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HairAndMakeup extends Model
{
    use SoftDeletes;

    protected $table = 'hair_and_makeup';

}