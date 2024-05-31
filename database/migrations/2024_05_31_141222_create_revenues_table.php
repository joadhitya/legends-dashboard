<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenues', function (Blueprint $table) {
            $table->id();
            $table->dateTime('jt')->nullable();
            $table->decimal('therapist', 15, 0)->nullable();
            $table->decimal('nona', 15, 0)->nullable();
            $table->decimal('kitchen', 15, 0)->nullable();
            $table->decimal('beverage', 15, 0)->nullable();
            $table->decimal('paket', 15, 0)->nullable();
            $table->decimal('minol', 15, 0)->nullable();
            $table->decimal('wine', 15, 0)->nullable();
            $table->decimal('cigarettes', 15, 0)->nullable();
            $table->decimal('cerutu', 15, 0)->nullable();
            $table->decimal('minibar', 15, 0)->nullable();
            $table->decimal('room', 15, 0)->nullable();
            $table->decimal('lostnbrake', 15, 0)->nullable();
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
        Schema::dropIfExists('revenues');
    }
}
