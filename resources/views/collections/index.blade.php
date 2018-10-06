@extends('base')

@section('content')
    <h1>All the Collections</h1>

    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Value</td>
                <td>Created at</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
        @foreach($collections as $key => $collection)
            <tr>
                <td>{{ $collection->id }}</td>
                <td>{{ $collection->name }}</td>
                <td>{{ $collection->value }}</td>
                <td>{{ $collection->created_at }}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ route('collections.edit', $collection) }}">Edit this Collection</a>
                    {{ Form::open(array('url' => route('collections.destroy', $collection))) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
