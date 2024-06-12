@extends('layouts.app')

@section('content')
    <h1>Create Strand</h1>
    <form action="{{ route('strands.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Save</button>
    </form>
@endsection
