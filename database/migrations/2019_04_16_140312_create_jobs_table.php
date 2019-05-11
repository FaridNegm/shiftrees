<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('location');
            $table->string('type');
            $table->string('experience');
            $table->string('job_title');
            $table->string('gender_preference');
            $table->string('nationality');
            $table->string('start_date');
            $table->text('description_ar');
            $table->text('description_en');
            $table->text('required');
            $table->string('status');
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
        Schema::dropIfExists('jobs');
    }
}
