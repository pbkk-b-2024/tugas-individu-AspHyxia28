<!-- resources/views/exams/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Exam</h1>

    <form action="{{ route('exams.update', $exam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Exam Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $exam->name }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Exam Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $exam->date }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Exam</button>
        <a href="{{ route('exams.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
