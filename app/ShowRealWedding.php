<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShowRealWedding extends Model
{
    use SoftDeletes;

    protected $table = 'show_real_wedding';
}
