<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('plant', 50)->nullable();
            $table->text('bpkb_name')->nullable();
            $table->string('chasis', 50)->nullable();
            $table->text('cust_name')->nullable();
            $table->date('stnk_jadi')->nullable();
            $table->text('bpkb_no')->nullable();
            $table->string('leasing', 50)->nullable();
            $table->string('engine_no', 50)->nullable();
            $table->string('type_unit', 50)->nullable();
            $table->string('nopol', 50)->nullable();
            $table->date('bpkb_input')->nullable();
            $table->integer('aging_bpkb_blmgr')->nullable();
            $table->string('business_unit', 50)->nullable();
            $table->string('sistem', 50)->nullable();
            $table->date('tgl_keluar_bpkb')->nullable();
            $table->string('pengambil_bpkb')->nullable();
            $table->string('top', 50)->nullable();
            $table->year('tahun_input_bpkb', 4)->nullable();
            $table->string('penerima')->nullable();
            $table->date('bpkb_revisi')->nullable();
            $table->date('selesai_revisi')->nullable();
            $table->string('keterangan', 50)->nullable();
            $table->string('wilayah', 50)->nullable();
            $table->string('status', 50)->nullable();
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
        Schema::dropIfExists('stock');
    }
}
