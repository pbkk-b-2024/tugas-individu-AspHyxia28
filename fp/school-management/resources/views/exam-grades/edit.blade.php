<!-- resources/views/exam-grades/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Exam Grade') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('exam-grades.update', $examGrade->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="student_id" class="form-label">Student</label>
                            <select class="form-control" id="student_id" name="student_id" required>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}" {{ $student->id == $examGrade->student_id ? 'selected' : '' }}>{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exam_id" class="form-label">Exam</label>
                            <select class="form-control" id="exam_id" name="exam_id" required>
                                @foreach($exams as $exam)
                                    <option value="{{ $exam->id }}" {{ $exam->id == $examGrade->exam_id ? 'selected' : '' }}>{{ $exam->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="grade" class="form-label">Grade</label>
                            <input type="text" class="form-control" id="grade" name="grade" value="{{ $examGrade->grade }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
