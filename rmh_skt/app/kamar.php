<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class kamar extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'date', 'kamar','tersedia',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
