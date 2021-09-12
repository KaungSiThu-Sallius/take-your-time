<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_competitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
            $table->longText('criteria');
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
        Schema::dropIfExists('criteria_competitions');
    }
}