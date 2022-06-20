<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaffle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_raffle');
            $table->string('quantity_raffle');
            $table->string('price_raffle');
            $table->string('describe_raffle');
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
        Schema::dropIfExists('raffle');
    }
}
