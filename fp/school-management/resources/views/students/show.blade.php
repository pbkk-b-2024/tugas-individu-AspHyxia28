@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Details</h1>
    
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->dob }}</p>
    <p><strong>Address:</strong> {{ $student->address }}</p>
    <p><strong>Gender:</strong> {{ $student->gender }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>

    <h2>Enrollment Information</h2>
    @foreach($student->classStudents as $classStudent)
        <p><strong>Class:</strong> {{ $classStudent->name }}</p>
        <p><strong>Teacher:</strong> {{ $classStudent->teacher->name }}</p>
    @endforeach

    <h2>Grades</h2>
    @foreach($student->examGrades as $examGrade)
        <p><strong>Exam:</strong> {{ $examGrade->exam->name }}</p>
        <p><strong>Grade:</strong> {{ $examGrade->grade }}</p>
    @endforeach
</div>
@endsection
