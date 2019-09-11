<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurelogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MeasureLog', function (Blueprint $table) {
            $table->bigIncrements('SerialID'); //BIGINT AUTO-INCREMENT PK
            $table->string('PersonalID',15)->references('PersonalID')->on('User');
            $table->string('BandID',10);
            $table->integer('Steps');
            $table->bigInteger('Distance');
            $table->integer('ExerciseCalories');
            $table->integer('RestCalories');
            $table->string('Heartrate',2048);
            $table->dateTime('StartTime');
            $table->dateTime('StopTime');
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
        Schema::dropIfExists('MeasureLog');
    }
}
