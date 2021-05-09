<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'family_name', 'father_name', 'mother_name', 'maid_name','phone_alt', 'image_url','image_url_alt','preferred_check_code','user_id'
    ];
}
