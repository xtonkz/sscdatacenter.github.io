<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_do', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('business_unit', 50)->nullable();
            $table->string('branch', 50)->nullable();
            $table->text('do_no')->nullable();
            $table->date('do_date')->nullable();
            $table->string('chasis')->nullable();
            $table->string('model')->nullable();
            $table->string('tipe_kendaraan')->nullable();
            $table->text('product_desc')->nullable();
            $table->string('color_desc')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('stnk_name')->nullable();
            $table->string('cust_address')->nullable();
            $table->string('cust_dist')->nullable();
            $table->string('cust_city')->nullable();
            $table->string('payment_method')->nullable();
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
        Schema::dropIfExists('data_do');
    }
}
