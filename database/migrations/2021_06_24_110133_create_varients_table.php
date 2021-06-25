<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('varients')){
            Schema::create('varients', function (Blueprint $table) {
                $table->id();
                $table->string('image');
                $table->string('color');
                $table->string('screen_size');
                $table->string('ram_size');
                $table->string('storage_size');
                $table->string('price');
                $table->timestamps();
            });
        }
        Schema::table('varients', function (Blueprint $table) {
            $table->foreignId('mobile_id');
            $table->foreign('mobile_id')->references('id')->on('mobiles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varients');
    }
}
