<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_set', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('card_id')->nullable();
            $table->foreign('card_id')->references('id')->on('cards');

            $table->unsignedInteger('set_id')->nullable();
            $table->foreign('set_id')->references('id')->on('sets');

            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_set');
    }
}
