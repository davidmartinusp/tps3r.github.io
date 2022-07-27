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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_category_id')->constrained('user_category');
            $table->foreignId('item_id')->constrained('item');
            $table->foreignId('tps3r_id')->constrained('tps3r');
            $table->string('name');
            $table->string('email');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('no_telp');
            $table->string('password');
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
        Schema::dropIfExists('user');
    }
};
