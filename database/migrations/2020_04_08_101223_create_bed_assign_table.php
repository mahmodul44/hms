<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bed_assign', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('serial');
            $table->string('patient_id');
            $table->string('bed_id');
            $table->string('description');
            $table->string('assign_date');
            $table->string('discharge_date');
            $table->string('assign_by');
            $table->string('status');
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
        Schema::dropIfExists('bed_assign');
    }
}
