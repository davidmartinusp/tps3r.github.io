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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_method_id')->constrained('payment_method');
            $table->foreignId('user_id')->constrained('user');
            $table->foreignId('point_id')->constrained('point_exchange');
            $table->foreignId('dues_id')->constrained('dues');
            $table->bigInteger('total_amount');
            $table->date('date');
            $table->enum('status', ['Berhasil', 'Tidak Berhasil']);
            $table->date('due_date');
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
        Schema::dropIfExists('transaction');
    }
};
