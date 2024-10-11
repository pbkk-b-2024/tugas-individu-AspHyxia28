<!-- resources/views/exam-grades/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Exam Grade Details') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Student</th>
                            <td>{{ $examGrade->student->name }}</td>
                        </tr>
                        <tr>
                            <th>Exam</th>
                            <td>{{ $examGrade->exam->name }}</td>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <td>{{ $examGrade->grade }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('exam-grades.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
