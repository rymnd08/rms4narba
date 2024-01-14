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
        Schema::create('breeding_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rabbit_id');
            $table->unsignedBigInteger('mated_to_id');
            $table->string('cage_number');
            $table->date('mating_date');
            $table->date('birthdate')->nullable();
            $table->date('kindling_date')->nullable();
            $table->integer('number_of_kits')->nullable();
            $table->integer('alive_kits')->nullable();
            $table->integer('dead_kits')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });    

        Schema::table('breeding_profiles', function(Blueprint $table){
            $table->foreign('rabbit_id')->references('id')->on('rabbit_profiles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mated_to_id')->references('id')->on('rabbit_profiles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breeding_profiles');
    }
};
