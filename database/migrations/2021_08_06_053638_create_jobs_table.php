<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->enum('type', ['part_time_job', 'full_time_job', 'internship']);
            $table->string('title');
            $table->string('image');
            $table->dateTime('deadline');
            $table->string('place');
            $table->dateTime('start_date');
            $table->string('organization_name');
            $table->longText('details');
            $table->string('job_duration');
            $table->string('apply_form_link');
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