<!-- resources/views/students/create.blade.php -->
@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <h1>Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>
@endsection
