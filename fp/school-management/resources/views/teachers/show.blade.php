<!-- resources/views/teachers/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teacher Details') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $teacher->name }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $teacher->dob }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $teacher->gender }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $teacher->address }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $teacher->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $teacher->email }}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{ $teacher->subject->name }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('teachers.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
