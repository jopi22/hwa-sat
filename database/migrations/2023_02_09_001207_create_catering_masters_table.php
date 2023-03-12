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
        Schema::create('hwa_catering_master', function (Blueprint $table) {
            $table->id();
            $table->string('master_id')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('porsi_harga')->nullable();
            $table->string('tot_pagi')->nullable();
            $table->string('tot_siang')->nullable();
            $table->string('tot_sore')->nullable();
            $table->string('tot_malam')->nullable();
            $table->string('tot_porsi')->nullable();
            $table->string('tot_harga')->nullable();
            $table->string('valid')->nullable();
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
        Schema::dropIfExists('catering_masters');
    }
};
