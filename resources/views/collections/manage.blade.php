@extends('base')

@section('content')

    <h1>Manage a Collection</h1>

    {{ $collection->name }} - {{ $collection->game->name }} <br><br>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    {{ Form::open(array('url' => route('collections.addDeck', $collection), 'method' => 'PUT')) }}    
        <div class="form-group">
            {{ Form::label('deck', 'Deck') }}
            {{ Form::select('game_id', [1,2,3], $collection->game_id, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
        </div>
    {{ Form::close() }}

    {{ Form::open(array('url' => route('collections.addCard', $collection), 'method' => 'PUT')) }}    
        <div class="form-group">
            {{ Form::label('card', 'Card') }}
            {{ Form::select('game_id', [1,2,3], $collection->game_id, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
        </div>
    {{ Form::close() }}
@endsection
