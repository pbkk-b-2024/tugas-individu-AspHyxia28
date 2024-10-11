<!-- resources/views/grades/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Grade</h1>

    <form action="{{ route('grades.update', $grade->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Grade Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $grade->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Grade</button>
        <a href="{{ route('grades.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
