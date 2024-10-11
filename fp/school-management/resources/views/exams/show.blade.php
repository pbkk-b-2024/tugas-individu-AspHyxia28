<!-- resources/views/exams/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Exam Details</h1>

    <div class="mb-3">
        <label for="name" class="form-label">Exam Name</label>
        <p>{{ $exam->name }}</p>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Exam Date</label>
        <p>{{ $exam->date }}</p>
    </div>

    <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('exams.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
