<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('birojasa', 50)->nullable();
            $table->text('inv_no')->nullable();
            $table->string('chasis', 50)->nullable();
            $table->text('cust_name')->nullable();
            $table->string('business_unit', 50)->nullable();
            $table->string('branch', 50)->nullable();
            $table->string('wilayah', 50)->nullable();
            $table->string('nopol', 50)->nullable();
            $table->date('tgl_notice')->nullable();
            $table->date('tgl_invoice')->nullable();
            $table->date('tgl_bayar')->nullable();
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
        Schema::dropIfExists('invoice');
    }
}
