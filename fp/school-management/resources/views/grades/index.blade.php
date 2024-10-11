<!-- resources/views/grades/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Grades</h1>
    <a href="{{ route('grades.create') }}" class="btn btn-primary">Add Grade</a>

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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
            <tr>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->name }}</td>
                <td>
                    <a href="{{ route('grades.show', $grade->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" style="display: inline;">
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
