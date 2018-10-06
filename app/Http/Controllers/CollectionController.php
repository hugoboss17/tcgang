<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        $collections = Collection::all();
        return view('collections.index', compact('collections'));
    }

    public function create()
    {
        $games = Game::all()->pluck('name', 'id');
        return view('collections.create', compact('games'));
    }

    /**
     * @param  Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        return view('collections.show', compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'game_id' => 'required|integer'
        ]);
        $collection = new Collection([
            'name' => $request->get('name'),
            'game_id' => $request->get('game_id')
        ]);
        $collection->save();

        return route('collections.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        $games = Game::all()->pluck('name', 'id');
        return view('collections.edit', compact('collection', 'games'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
      $request->validate([
        'name'=>'required',
        'game_id' => 'required|integer'
      ]);
      $collection->name = $request->get('name');
      $collection->game_id = $request->get('game_id');
      
      $collection->save();
      return route('collections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Collection  $collection
     * @return Response
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return back();
    }
}
