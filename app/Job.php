<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";

    protected $fillable = [
        'date', 'location', 'type', 'experience', 'job_title', 'gender_preference', 'nationality', 'start_date', 'description_ar', 'description_en', 'required', 'status'
    ];
}
