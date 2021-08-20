<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndergraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undergraduates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scholarship_id');
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onDelete('cascade');
            $table->string('slug');
            $table->string('type');
            $table->string('title');
            $table->string('image');
            $table->dateTime('start_application_date');
            $table->dateTime('deadline');
            $table->string('funding');
            $table->string('country');
            $table->string('given_by');
            $table->longText('details');
            $table->string('official_website');
            $table->string('apply_form_link');
            $table->longText('other_information')->nullable();
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
        Schema::dropIfExists('undergraduates');
    }
}