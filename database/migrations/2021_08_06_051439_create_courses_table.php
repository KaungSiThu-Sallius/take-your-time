<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['free_course', 'paid_course']);
            $table->string('course_name');
            $table->string('image');
            $table->dateTime('deadline');
            $table->string('place');
            $table->integer('price');
            $table->dateTime('start_date');
            $table->string('taught_by');
            $table->longText('details');
            $table->string('course_duration');
            $table->enum('platform', ['zoom', 'googlemeet']);
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
        Schema::dropIfExists('courses');
    }
}