<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('dname');
          $table->string('email')->nullable();
          $table->string('mobile');
          $table->string('address');
          $table->string('gender');
          $table->string('bloodGroup');
          $table->string('dob');
          $table->string('degination');
          $table->string('department');
          $table->string('biography');
          $table->string('education');
          $table->string('image')->nullable();
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
        Schema::dropIfExists('doctor');
    }
}
