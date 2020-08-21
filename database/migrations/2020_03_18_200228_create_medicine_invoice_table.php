<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_invoice', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('patient_id');
            $table->string('total');
            $table->string('vat');
            $table->string('discount');
            $table->string('grand_total');
            $table->string('paid');
            $table->string('due');
            $table->string('status');
            $table->string('created_id');
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
        Schema::dropIfExists('m_invoice');
    }
}
