<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->enum('type', ['competition', 'seminar']);
            $table->string('title');
            $table->string('image');
            $table->dateTime('deadline');
            $table->string('place');
            $table->dateTime('start_date');
            $table->string('organization_name');
            $table->longText('details');
            $table->longText('other_information')->nullable();
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
        Schema::dropIfExists('others');
    }
}