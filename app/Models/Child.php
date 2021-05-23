<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //
    protected $fillable = ['family_id', 'name', 'gender', 'dob', 'image_url', 'image_url_alt', 'category'];
}
