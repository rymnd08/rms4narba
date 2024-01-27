<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    
    {
        Schema::create('rabbit_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farm_id')->index();
            $table->string('rabbit_code');
            $table->string('rabbit_name');
            $table->string('cage_number');
            $table->string('sex');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('breed_id')->nullable();
            $table->string('color');
            $table->date('birthdate');
            $table->string('image')->nullable();
            $table->text('description');
            $table->timestamps();

        });
        
        Schema::table('rabbit_profiles', function(Blueprint $table){
            $table->foreign('type_id')->references('id')->on('rabbit_types');
            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('farm_id')->references('farm_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rabbit_profiles');
    }
};
