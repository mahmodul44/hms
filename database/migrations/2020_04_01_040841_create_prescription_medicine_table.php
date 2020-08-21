<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_medicine', function (Blueprint $table) {
            $table->Increments('pr_m_id');
            $table->string('pr_id');
            $table->string('medicine_id');
            $table->string('douse');
            $table->string('douse_day');
            $table->string('instruction');
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
        Schema::dropIfExists('prescription_medicine');
    }
}
