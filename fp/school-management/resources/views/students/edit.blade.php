<!-- resources/views/students/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="dob" value="{{ $student->dob }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender" required>
                    <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $student->address }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" value="{{ $student->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $student->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
    </div>
@endsection
