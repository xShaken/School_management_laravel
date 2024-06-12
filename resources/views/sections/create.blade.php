@extends('layouts.app')

@section('content')
    <h1>Create Section</h1>
    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="strand_id">Strand</label>
        <select name="strand_id" id="strand_id" required>
            @foreach ($strands as $strand)
                <option value="{{ $strand->id }}">{{ $strand->name }}</option>
            @endforeach
        </select>
        
        <button type="submit">Save</button>
    </form>
@endsection
