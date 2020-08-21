<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('user_role');
            $table->string('emp_name');
            $table->string('emp_email');
            $table->string('emp_password');
            $table->string('emp_mobile');
            $table->string('emp_image');
            $table->string('emp_gender');
            $table->string('emp_address');
            $table->string('emp_status');
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
        Schema::dropIfExists('employee');
    }
}
