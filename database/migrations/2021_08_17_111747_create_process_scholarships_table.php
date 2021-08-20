<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_scholarships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scholarship_id');
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onDelete('cascade');
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
        Schema::dropIfExists('process_scholarships');
    }
}