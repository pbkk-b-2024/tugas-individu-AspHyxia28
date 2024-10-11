<!-- resources/views/grades/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Grade</h1>

    <form action="{{ route('grades.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Grade Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Grade</button>
        <a href="{{ route('grades.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
