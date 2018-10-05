<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{

    protected $table = 'collections';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'game_id'];

    /**
     * Get the game associated with the collection.
     */
    public function game()
    {
        return $this->hasOne('App\Models\Game');
    }

    /**
     * The decks that belong to the collection.
     */
    public function decks()
    {
        return $this->belongsToMany('App\Models\Deck');
    }

    /**
     * The cards that belong to the collection.
     */
    public function cards()
    {
        return $this->belongsToMany('App\Models\Card');
    }
}
