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
            $table->id();
            $table->unsignedBigInteger('farm_id')->nullable();
            $table->string('rabbit_code');
            $table->string('rabbit_name');
            $table->string('cage_number');
            $table->string('sex');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('breed_id');
            $table->string('color');
            $table->date('birthdate');
            $table->string('rabbit_image')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('rabbit_types');
            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade')->onUpdate('cascade');
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
