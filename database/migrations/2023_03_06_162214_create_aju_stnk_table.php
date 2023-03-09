<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjuStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aju_stnk', function (Blueprint $table) {
            $table->morphs('aju');
            $table->string('aju_branch')->nullable();
            $table->string('aju_cust_type')->nullable();
            $table->string('aju_fullname')->nullable();
            $table->string('aju_nik')->nullable();
            $table->string('aju_corp_name')->nullable();
            $table->string('aju_phone')->nullable();
            $table->string('aju_address')->nullable();
            $table->string('aju_email')->nullable();
            $table->string('aju_chasis')->nullable();
            $table->string('aju_engine')->nullable();
            $table->string('aju_production')->nullable();
            $table->string('aju_gage')->nullable();
            $table->string('aju_sj')->nullable();
            $table->string('aju_spood')->nullable();
            $table->string('aju_upload_ktp')->nullable();
            $table->string('aju_npwp_person')->nullable();
            $table->string('aju_kk')->nullable();
            $table->string('aju_nib')->nullable();
            $table->string('aju_izin_lokasi')->nullable();
            $table->string('aju_izin_usaha')->nullable();
            $table->string('aju_npwp_copr')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
            
            $table->primary(['aju_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aju_stnk');
    }
}
