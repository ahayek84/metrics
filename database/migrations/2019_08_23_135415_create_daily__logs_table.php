<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily__logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('action_date');
            $table->string('class_of_object'); // country // channel // inventory
            $table->string('type_of_object'); ## name of item // name of inventory // name of channel
            $table->string('count'); ## this can  be added
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
        Schema::dropIfExists('daily__logs');
    }
}
