<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('insurances'))
        {
            Schema::create('insurances', function (Blueprint $table) {
                $table->id();
                $table->string('policy_name');
                $table->string('policy_image');
                $table->string('policy_price');
                $table->string('validity');
                $table->longText('description');
                $table->longText('term_condition');
                $table->timestamps();
            });
        }
        Schema::table('insurances', function (Blueprint $table) {
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
        Schema::dropIfExists('insurances');
    }
}
