<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCerimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceremonies', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('priest_id');

            $table->date('date');
            $table->time('time');
            $table->float('tithe');

            $table->timestamps();

            $table->foreign('priest_id')->references('id')->on('priests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cerimonies');
    }
}
