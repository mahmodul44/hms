<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestLabInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_lab_invoice', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('patient_id');
            $table->decimal('total');
            $table->decimal('vat');
            $table->decimal('discount');
            $table->decimal('grand_total');
            $table->decimal('paid');
            $table->decimal('due');
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
        Schema::dropIfExists('test_lab_invoice');
    }
}
