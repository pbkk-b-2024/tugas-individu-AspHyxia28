<!-- resources/views/teachers/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Teachers') }}</div>

                <div class="card-body">
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary mb-3">Add New Teacher</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->dob }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->subject->name }}</td>
                                    <td>
                                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
