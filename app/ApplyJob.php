<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    protected $table = "apply_jobs";

    protected $fillable = [
        'job_name', 'name', 'email', 'phone', 'nationality', 'birthday', 'university', 'graduation_year', 'city', 'last_salary', 'expected_salary', 'file'
    ];
}
