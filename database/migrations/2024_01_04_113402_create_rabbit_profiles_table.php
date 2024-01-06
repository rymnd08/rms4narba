<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rabbit_profiles', function (Blueprint $table) {
            $table->id('rabbit_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('rabbit_code');
            $table->string('rabbit_name');
            $table->string('cage_number');
            $table->string('sex');
            $table->string('type');
            $table->string('breed');
            $table->string('color');
            $table->date('birthdate');
            $table->string('rabbit_image')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rabbit_profiles');
    }
};
