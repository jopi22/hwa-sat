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
        Schema::create('hwa_hauling', function (Blueprint $table) {
            $table->id();
            $table->string('tgl')->nullable();
            $table->string('equip_id')->nullable();
            $table->string('kar_id')->nullable();
            $table->string('dedi_id')->nullable();
            $table->string('start_loc')->nullable();
            $table->string('end_loc')->nullable();
            $table->integer('timbangan')->nullable();
            $table->string('master_id')->nullable();
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
        Schema::dropIfExists('haulings');
    }
};
