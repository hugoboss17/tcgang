@extends('base')

@section('content')
    <h1>Create a Collection</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif

    {{ Form::open(array('url' => route('collections.store'))) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('game', 'Game') }}
            {{ Form::select('game_id', $games, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
        </div>

    {{ Form::close() }}
@endsection
