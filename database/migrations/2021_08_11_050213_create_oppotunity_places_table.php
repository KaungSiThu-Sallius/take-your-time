<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppotunityPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppotunity_places', function (Blueprint $table) {
            $table->id();
            $table->enum('oppotunity', ['undergraduate', 'master', 'phd', 'fellowship', 'grant', 'conference', 'free_course', 'paid_course', 'internship', 'part_time_job', 'full_time_job', 'seminar', 'competition']);
            $table->string('place');
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
        Schema::dropIfExists('oppotunity_places');
    }
}