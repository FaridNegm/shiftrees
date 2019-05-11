<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimates_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('question');
            $table->string('image');
            $table->string('answer1')->nullable();
            $table->string('answer1_dev_cost')->nullable();
            $table->string('answer1_des_cost')->nullable();
            $table->string('answer2')->nullable();
            $table->string('answer2_dev_cost')->nullable();
            $table->string('answer2_des_cost')->nullable();
            $table->string('answer3')->nullable();
            $table->string('answer3_dev_cost')->nullable();
            $table->string('answer3_des_cost')->nullable();
            $table->string('answer4')->nullable();
            $table->string('answer4_dev_cost')->nullable();
            $table->string('answer4_des_cost')->nullable();
            $table->string('answer5')->nullable();
            $table->string('answer5_dev_cost')->nullable();
            $table->string('answer5_des_cost')->nullable();
            $table->string('answer6')->nullable();
            $table->string('answer6_dev_cost')->nullable();
            $table->string('answer6_des_cost')->nullable();
            $table->string('answer7')->nullable();
            $table->string('answer7_dev_cost')->nullable();
            $table->string('answer7_des_cost')->nullable();
            $table->string('answer8')->nullable();
            $table->string('answer8_dev_cost')->nullable();
            $table->string('answer8_des_cost')->nullable();
            $table->string('answer9')->nullable();
            $table->string('answer9_dev_cost')->nullable();
            $table->string('answer9_des_cost')->nullable();
            $table->string('answer10')->nullable();
            $table->string('answer10_dev_cost')->nullable();
            $table->string('answer10_des_cost')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimate_apps');
    }
}
