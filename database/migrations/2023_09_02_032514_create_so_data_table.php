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
        Schema::create('hwa_so_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('so_periode_id')->nullable();
            $table->bigInteger('barang_id')->nullable();
            $table->bigInteger('stok_awal')->nullable();
            $table->integer('stok_aktual')->nullable();
            $table->integer('selisih')->nullable();
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
        Schema::dropIfExists('so_data');
    }
};
