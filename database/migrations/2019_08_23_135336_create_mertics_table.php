<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('mertics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('act_date');
            $table->string('metric_name');
            $table->string('metric_value');
            $table->timestamps();
        });

        ## number of users
        ## profits
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mertics');
    }
}
