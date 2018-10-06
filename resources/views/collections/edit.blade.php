@extends('base')

@section('content')

    <h1>Edit a Collection</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    {{ Form::open(array('url' => route('collections.update', $collection), 'method' => 'PUT')) }}
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

