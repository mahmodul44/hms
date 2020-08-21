<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('mobile');
            $table->string('address');
            $table->string('gender');
            $table->string('bloodGroup');
            $table->string('dob');
            $table->string('referencetype')->nullable();
            $table->string('reference')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('patient');
    }
}
