@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Class</h1>
    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Class Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity</label>
            <input type="number" name="capacity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="teacher_id">Teacher</label>
            <select name="teacher_id" class="form-control" required>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save Class</button>
    </form>
</div>
@endsection
