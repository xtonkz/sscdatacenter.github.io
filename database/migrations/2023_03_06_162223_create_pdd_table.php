<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdd', function (Blueprint $table) {
            $table->integer('pdd_id')->primary();
            $table->string('business_unit')->nullable();
            $table->string('branch')->nullable();
            $table->string('chasis')->nullable();
            $table->string('salesmen')->nullable();
            $table->string('kontak_sales')->nullable();
            $table->string('zona')->nullable();
            $table->string('batch')->nullable();
            $table->string('nama_driver')->nullable();
            $table->string('kontak_driver')->nullable();
            $table->time('plan_out')->nullable();
            $table->string('pdd_cust_name')->nullable();
            $table->string('pdd_address')->nullable();
            $table->string('pdd_lokasi_unit')->nullable();
            $table->string('pdd_stnk')->nullable();
            $table->string('pdd_warna')->nullable();
            $table->string('pdd_model')->nullable();
            $table->string('pdd_acc')->nullable();
            $table->date('pdd_tgl_acc')->nullable();
            $table->string('pdd_asal_unit')->nullable();
            $table->string('pdd_cust_phone')->nullable();
            $table->time('pdd_plan_tiba')->nullable();
            $table->date('pdd_tgl_dr')->nullable();
            $table->date('pdd_plan_deliv')->nullable();
            $table->date('pdd_stnk_deliv')->nullable();
            $table->date('pdd_bpkb_deliv')->nullable();
            $table->string('pdd_destination')->nullable();
            $table->string('pdd_engine')->nullable();
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
        Schema::dropIfExists('pdd');
    }
}
