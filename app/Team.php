<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "teams";

    protected $fillable = [
        'title_ar', 'title_en', 'job_ar', 'job_en', 'image', 'status'
    ];
}
