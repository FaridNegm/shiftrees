<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstimateApp extends Model
{
    protected $table = "estimates_apps";

    protected $fillable = [
        'type', 'question',  'image', 'answer1', 'answer1_dev_cost', 'answer1_des_cost', 'answer2', 'answer2_dev_cost', 'answer2_des_cost', 'answer3', 'answer3_dev_cost', 'answer3_des_cost', 'answer4', 'answer4_dev_cost', 'answer4_des_cost', 'answer4', 'answer4_dev_cost', 'answer4_des_cost', 'answer5', 'answer5_dev_cost', 'answer5_des_cost', 'answer6', 'answer6_dev_cost', 'answer6_des_cost', 'answer7', 'answer7_dev_cost', 'answer7_des_cost', 'answer8', 'answer8_dev_cost', 'answer8_des_cost', 'answer9', 'answer9_dev_cost', 'answer9_des_cost', 'answer10', 'answer10_dev_cost', 'answer10_des_cost'
    ];
}
