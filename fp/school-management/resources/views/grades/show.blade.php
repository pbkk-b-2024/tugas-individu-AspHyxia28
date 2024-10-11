<!-- resources/views/grades/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Grade Details</h1>

    <div class="mb-3">
        <label for="name" class="form-label">Grade Name</label>
        <p>{{ $grade->name }}</p>
    </div>

    <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('grades.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
