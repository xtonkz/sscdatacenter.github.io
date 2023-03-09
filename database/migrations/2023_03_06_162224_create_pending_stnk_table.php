<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_stnk', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('cust_name')->nullable();
            $table->string('business_unit', 50)->nullable();
            $table->string('branch', 50)->nullable();
            $table->string('chasis', 50)->nullable();
            $table->string('wilayah', 50)->nullable();
            $table->date('faktur_date')->nullable();
            $table->date('cek_fisik')->nullable();
            $table->date('terima_faktur')->nullable();
            $table->date('terima_berkasafi')->nullable();
            $table->integer('lt_faktur')->nullable();
            $table->string('pilnop', 50)->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('pending_stnk');
    }
}
