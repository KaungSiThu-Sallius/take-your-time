<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_grants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grant_id');
            $table->foreign('grant_id')->references('id')->on('grants')->onDelete('cascade');
            $table->longText('process');
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
        Schema::dropIfExists('process_grants');
    }
}