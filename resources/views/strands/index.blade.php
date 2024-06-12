@extends('layouts.app')

@section('content')
    <h1>Strands</h1>
    <a href="{{ route('strands.create') }}">Add New Strand</a>
    <ul>
        @foreach ($strands as $strand)
            <li>
                {{ $strand->name }}
                <a href="{{ route('strands.edit', $strand->id) }}">Edit</a>
                <form action="{{ route('strands.destroy', $strand->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
