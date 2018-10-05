<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{

    protected $table = 'decks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'game_id'];

    /**
     * Get the game associated with the deck.
     */
    public function game()
    {
        return $this->hasOne('App\Models\Game');
    }

    /**
     * The cards that belong to the deck.
     */
    public function cards()
    {
        return $this->belongsToMany('App\Models\Card');
    }
}
