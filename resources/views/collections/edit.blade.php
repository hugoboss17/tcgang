@extends('base')

@section('content')
    <h1>Create a Collection</h1>

    {{ Form::open(array('url' => route('collections.store'))) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', $collection->name, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('game', 'Game') }}
            {{ Form::select('game_id', $games, $collection->game_id, array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
        </div>

    {{ Form::close() }}
@endsection
