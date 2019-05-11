<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormEstimate extends Model
{
    protected $table = "form_estimates";

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'message'
    ];
}
