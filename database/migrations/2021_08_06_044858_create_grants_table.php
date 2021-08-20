<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grants', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('level');
            $table->string('title');
            $table->string('image');
            $table->dateTime('start_application_date');
            $table->dateTime('deadline');
            $table->string('funding');
            $table->string('country');
            $table->string('given_by');
            $table->longText('details');
            $table->longText('other_information')->nullable();
            $table->string('official_website');
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
        Schema::dropIfExists('grants');
    }
}