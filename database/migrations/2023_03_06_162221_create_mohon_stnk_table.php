<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_stnk', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('cust_name')->nullable();
            $table->string('business_unit', 50)->nullable();
            $table->string('branch', 50)->nullable();
            $table->string('birojasa', 50)->nullable();
            $table->string('chasis', 50)->nullable();
            $table->string('wilayah', 50)->nullable();
            $table->date('efektif_faktur')->nullable();
            $table->date('cek_fisik')->nullable();
            $table->date('terima_faktur')->nullable();
            $table->date('berkas_cust')->nullable();
            $table->date('tgl_mohon')->nullable();
            $table->date('est_stnkjadi')->nullable();
            $table->date('tgl_notice')->nullable();
            $table->string('nopol', 50)->nullable();
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
        Schema::dropIfExists('mohon_stnk');
    }
}
