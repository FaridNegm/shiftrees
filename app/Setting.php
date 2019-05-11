<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";

    protected $fillable = [
        'title_ar', 'title_en', 'description_ar', 'description_en', 'contact_description_ar', 'contact_description_en', 'contact_image', 'facebook', 'whatsapp', 'twitter', 'linkedin', 'gmail', 'email', 'location_map', 'location_map2', 'address', 'address2', 'phone'
    ];
}
