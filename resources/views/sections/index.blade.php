@extends('layouts.app')

@section('content')
    <h1>Sections</h1>
    <a href="{{ route('sections.create') }}">Add New Section</a>
    <ul>
        @foreach ($sections as $section)
            <li>
                {{ $section->name }} ({{ $section->strand->name }})
                <a href="{{ route('sections.edit', $section->id) }}">Edit</a>
                <form action="{{ route('sections.destroy', $section->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
