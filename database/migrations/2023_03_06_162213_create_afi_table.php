<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afi', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('cust_name', 50)->nullable();
            $table->text('cust_address')->nullable();
            $table->text('cust_address2')->nullable();
            $table->text('ref_number')->nullable();
            $table->string('chasis', 50)->nullable()->unique('chasis');
            $table->string('branch', 50)->nullable();
            $table->string('jenis_chasis', 50)->nullable();
            $table->date('modem_date')->nullable();
            $table->date('faktur_turun')->nullable();
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
        Schema::dropIfExists('afi');
    }
}
