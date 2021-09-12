<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefit_competitions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
            $table->longText('benefit');
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
        Schema::dropIfExists('benefit_competitions');
    }
}