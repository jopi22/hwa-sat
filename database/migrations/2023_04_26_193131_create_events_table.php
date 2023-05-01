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
        Schema::create('hwa_event', function (Blueprint $table) {
            $table->id();
            $table->string('event')->nullable();
            $table->string('org')->nullable();
            $table->string('start')->nullable();
            $table->string('finish')->nullable();
            $table->string('detail')->nullable();
            $table->string('location')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('events');
    }
};
