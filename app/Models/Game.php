<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $table = 'games';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The cards that belong to the collection.
     */
    public function collections()
    {
        return $this->hasMany('App\Models\Collection');
    }
}
