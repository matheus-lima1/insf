<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoyalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loyals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('cpf');
            $table->integer('cep');
            $table->string('neighborhood');
            $table->string('street');
            $table->integer('number');
            $table->string('complement')->nullable();
            $table->enum('sex',['m','f']);
            $table->date('birth_date');
            $table->boolean('major');
            $table->string('phone');
            $table->float('tithe');



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
        Schema::dropIfExists('loyals');
    }
}
