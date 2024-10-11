<!-- resources/views/exam-grades/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Exam Grades') }}</div>

                <div class="card-body">
                    <a href="{{ route('exam-grades.create') }}" class="btn btn-primary mb-3">Add New Exam Grade</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Exam</th>
                                <th>Grade</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($examGrades as $examGrade)
                                <tr>
                                    <td>{{ $examGrade->student->name }}</td>
                                    <td>{{ $examGrade->exam->name }}</td>
                                    <td>{{ $examGrade->grade }}</td>
                                    <td>
                                        <a href="{{ route('exam-grades.show', $examGrade->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('exam-grades.edit', $examGrade->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('exam-grades.destroy', $examGrade->id) }}" method="POST" style="display:inline;">
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
