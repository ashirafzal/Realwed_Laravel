<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CoupleWebsite extends Model
{
    use Notifiable;

    protected $table = 'couple_websites';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'couple_id',
        'couple_email',
        'couple_name',
        'wedding_date',
        'contact_email',
    ];
}
