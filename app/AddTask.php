<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddTask extends Model
{
    use SoftDeletes;
    
    protected $table = 'add_task';

}