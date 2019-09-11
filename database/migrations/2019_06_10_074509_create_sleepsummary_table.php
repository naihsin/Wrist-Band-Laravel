<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSleepsummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SleepSummary', function (Blueprint $table) {
            $table->bigIncrements('SerialID'); //BIGINT AUTO-INCREMENT PK
            $table->string('PersonalID',15)->references('PersonalID')->on('User');
            $table->string('BandID',10);
            $table->dateTime('SleepStartTime');
            $table->dateTime('SleepStopTime');
            $table->dateTime('DeepSleepStartTime');
            $table->dateTime('LightSleepStartTime');
            $table->dateTime('OtherSleepStartTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SleepSummary');
    }
}
