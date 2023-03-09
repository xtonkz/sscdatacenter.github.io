<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelvstnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delvstnk', function (Blueprint $table) {
            $table->integer('delvstnk_id')->primary();
            $table->string('delvstnk_branch')->nullable();
            $table->string('delvstnk_chasis')->nullable();
            $table->string('delvstnk_model')->nullable();
            $table->string('delvstnk_warna')->nullable();
            $table->string('delvstnk_engine')->nullable();
            $table->string('delvstnk_sales')->nullable();
            $table->string('delvstnk_phonesales')->nullable();
            $table->string('delvstnk_zona')->nullable();
            $table->string('delvstnk_batch')->nullable();
            $table->string('delvstnk_driver')->nullable();
            $table->string('delvstnk_condriver')->nullable();
            $table->string('delvstnk_custname')->nullable();
            $table->string('delvstnk_phonecust')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delvstnk');
    }
}
