<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriteriaGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_grants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grant_id');
            $table->foreign('grant_id')->references('id')->on('grants')->onDelete('cascade');
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
        Schema::dropIfExists('criteria_grants');
    }
}