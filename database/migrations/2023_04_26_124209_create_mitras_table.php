<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hwa_mitra', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('logo');
            $table->string('tgl_kontrak');
            $table->string('akhir_kontrak');
            $table->string('sewa_exc');
            $table->string('sewa_dt');
            $table->string('sewa_vb');
            $table->string('sewa_lain');
            $table->string('file_kontrak');
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
        Schema::dropIfExists('mitras');
    }
};
