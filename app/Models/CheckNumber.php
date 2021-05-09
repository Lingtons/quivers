<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckNumber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'checkin_code', 'quantity'
    ];

//    protected $casts = [
//        'status' => 'boolean',
//    ];
}
