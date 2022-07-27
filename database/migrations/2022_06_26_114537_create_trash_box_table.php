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
        Schema::create('trash_box', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_trash');
            $table->string('trash_weight');
            $table->enum('sensor_status', ['Available', 'Full']);
            $table->enum('transport_status', ['On The Way', 'On TPS3R']);
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
        Schema::dropIfExists('trash_box');
    }
};
