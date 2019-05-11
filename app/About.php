<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "abouts_us";

    protected $fillable = [
        'title_ar', 'title_en', 'description_ar', 'description_en', 'image', 'status'
    ];
}
