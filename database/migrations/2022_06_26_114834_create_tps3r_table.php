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
        Schema::create('tps3r', function (Blueprint $table) {
            $table->id();
            $table->integer('village_kemendagri_code');
            $table->foreignId('transportation_type_id')->constrained('transportation_type');
            $table->foreignId('trash_box_id')->constrained('trash_box');
            $table->foreignId('review_id')->constrained('review');
            $table->string('tps3r_name');
            $table->bigInteger('phone_number');
            $table->string('daily_open');
            $table->string('number_of_employees');
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
        Schema::dropIfExists('tps3r');
    }
};
