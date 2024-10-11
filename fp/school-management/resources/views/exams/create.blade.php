<!-- resources/views/exams/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Exam</h1>

    <form action="{{ route('exams.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Exam Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Exam Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Exam</button>
        <a href="{{ route('exams.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
