<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardDeck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_deck', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('card_id')->nullable();
            $table->foreign('card_id')->references('id')->on('cards');

            $table->unsignedInteger('deck_id')->nullable();
            $table->foreign('deck_id')->references('id')->on('decks');

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
        Schema::dropIfExists('card_deck');
    }
}
