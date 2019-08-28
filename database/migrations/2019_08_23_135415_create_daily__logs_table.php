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
            $table->string('count_of_orders');
            $table->string('count_of_orders_recieved'); ## this can
            $table->string('count_of_orders_completed'); ## this can  be added
            $table->string('count_of_total_items_sold'); ## this can
            $table->string('count_of_channel_items_sold'); ## this can ## per channel { item : 'x' , cnt: 5} for amazon
            $table->string('count_of_items_purched'); ## this can  be added
            $table->string('count_of_total_users'); ## this can  be added
            $table->string('count_of_new_users'); ## this can  be added
            $table->string('count_of_orders_per_country'); ## this can  be added
            $table->string('count_of_new_orders_per_cpountry'); ## this can  be added
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
