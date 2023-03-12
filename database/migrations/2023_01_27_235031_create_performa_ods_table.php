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
        Schema::create('hwa_performa_od', function (Blueprint $table) {
            $table->id();
            $table->string('master_id');
            $table->string('shift_id');
            $table->string('kar_id');
            $table->string('equip_id');
            $table->string('hm_awal');
            $table->string('hm_akhir');
            $table->string('hm_pot');
            $table->string('hm_total');
            $table->string('lokasi_id');
            $table->string('dedicated_id');
            $table->string('remark');
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
        Schema::dropIfExists('performa_ods');
    }
};
