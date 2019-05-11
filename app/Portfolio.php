<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = "portfolios";

    protected $fillable = [
        'title_ar', 'title_en', 'description_ar', 'description_en', 'image', 'status' , 'type' , 'url'
    ];
}
