<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStnkJadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnk_jadi', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('business_unit')->nullable();
            $table->string('branch')->nullable();
            $table->string('chasis')->nullable();
            $table->string('model')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('birojasa')->nullable();
            $table->date('tgl_aju')->nullable();
            $table->date('tgl_estimasi_stnk_jadi')->nullable();
            $table->date('tgl_stnkjadi')->nullable();
            $table->date('tgl_bpkbjadi')->nullable();
            $table->string('nopol')->nullable();
            $table->date('plan_delv_stnk')->nullable();
            $table->date('plan_delv_bpkb')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status_stnk')->nullable();
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
        Schema::dropIfExists('stnk_jadi');
    }
}
