<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //
    protected $fillable = ['user_id', 'family_name', 'phone', 'phone_alt', 'email', 'father_name', 'mother_name', 'maid_name', 'image_url', 'image_url_alt', 'preferred_check_code'];
}
