<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCeremonialistsCeremoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceremonialists_ceremonies', function (Blueprint $table) {
           // $table->id();

            $table->unsignedBigInteger('ceremony_id');
            $table->unsignedBigInteger('ceremonialist_id');


            $table->foreign('ceremony_id')->references('id')->on('ceremonies');
            $table->foreign('ceremonialist_id')->references('id')->on('ceremonialists');

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
        Schema::dropIfExists('ceremonialists_ceremonies');
    }
}
