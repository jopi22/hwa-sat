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
        Schema::create('hwa_equip_master', function (Blueprint $table) {
            $table->id();
            $table->string('master_id')->nullable();
            $table->string('equip_id')->nullable();
            $table->string('hm_awal')->nullable();
            $table->string('hm_akhir')->nullable();
            $table->string('hm_pot')->nullable();
            $table->string('hm_total')->nullable();
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
        Schema::dropIfExists('equip_masters');
    }
};
