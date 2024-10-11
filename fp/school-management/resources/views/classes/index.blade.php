@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Classes</h1>
    <a href="{{ route('classes.create') }}" class="btn btn-primary">Add Class</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Capacity</th>
                <th>Teacher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $classRoom)
            <tr>
                <td>{{ $classRoom->name }}</td>
                <td>{{ $classRoom->capacity }}</td>
                <td>{{ $classRoom->teacher->name }}</td>
                <td>
                    <a href="{{ route('classes.edit', $classRoom) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('classes.destroy', $classRoom) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
