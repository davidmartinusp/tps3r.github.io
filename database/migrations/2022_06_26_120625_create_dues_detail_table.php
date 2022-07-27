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
        Schema::create('dues_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dues_category_id')->constrained('dues_category');
            $table->foreignId('tps3r_id')->constrained('tps3r');
            $table->string('dues_method');
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
        Schema::dropIfExists('dues_detail');
    }
};
