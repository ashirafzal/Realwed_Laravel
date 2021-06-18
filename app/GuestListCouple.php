<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GuestListCouple extends Model
{
    use SoftDeletes;

    protected $table = 'guest_list_couple';
}
