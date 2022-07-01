<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('LoS');
            $table->string('subject_name');
            $table->string('subject_id');
            $table->string('level');
            $table->string('department');
            $table->string('day');
            $table->string('from');
            $table->string('to');
            $table->string('hall_number');
            $table->string('hall_floor');

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
        Schema::dropIfExists('create_schedules');
    }
}
