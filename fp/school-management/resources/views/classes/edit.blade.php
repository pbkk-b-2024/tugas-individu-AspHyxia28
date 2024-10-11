@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Class</h1>

    <form action="{{ route('classes.update', $class->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Class Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $class->name }}" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $class->capacity }}" required>
        </div>
        <div class="mb-3">
            <label for="teacher_id" class="form-label">Teacher</label>
            <select class="form-select" id="teacher_id" name="teacher_id" required>
                <option value="">Select a Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $class->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Class</button>
    </form>
</div>
@endsection
