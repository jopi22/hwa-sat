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
        Schema::create('hwa_odmaster', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('master_id')->nullable();
            $table->bigInteger('kar_id')->nullable();
            $table->integer('hm_total')->nullable();
            $table->integer('gaji_total')->nullable();
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
        Schema::dropIfExists('o_d_masters');
    }
};
