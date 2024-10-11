<!-- resources/views/exams/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Exams</h1>
    <a href="{{ route('exams.create') }}" class="btn btn-primary">Add Exam</a>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exams as $exam)
            <tr>
                <td>{{ $exam->id }}</td>
                <td>{{ $exam->name }}</td>
                <td>{{ $exam->date }}</td>
                <td>
                    <a href="{{ route('exams.show', $exam->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('exams.destroy', $exam->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
