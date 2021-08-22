<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_others', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('other_id');
            $table->foreign('other_id')->references('id')->on('others')->onDelete('cascade');
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
        Schema::dropIfExists('process_others');
    }
}