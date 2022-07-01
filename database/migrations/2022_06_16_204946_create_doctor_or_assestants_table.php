<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorOrAssestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_or_assestants', function (Blueprint $table) {
            $table->id();
            $table->string('D_or_A');
            $table->string('_ID_');
            $table->string('name');
            $table->string('username');
            $table->string('password',60);
            $table->string('email');
            $table->string('phone');
            $table->string('department');
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
        Schema::dropIfExists('doctor_or_assestants');
    }
}
