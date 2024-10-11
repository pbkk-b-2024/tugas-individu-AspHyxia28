<?php

namespace App\Http\Controllers;

use App\Models\ExamGrade;
use App\Models\Student;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamGradeController extends Controller
{
    public function index()
    {
        $examGrades = ExamGrade::with(['student', 'exam'])->get();
        return view('exam-grades.index', compact('examGrades'));
    }

    public function create()
    {
        $students = Student::all();
        $exams = Exam::all();
        return view('exam-grades.create', compact('students', 'exams'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'exam_id' => 'required|exists:exams,id',
            'grade' => 'required|string|max:255',
        ]);

        ExamGrade::create($validatedData);
        return redirect()->route('exam-grades.index')->with('success', 'Exam Grade created successfully.');
    }

    public function show(ExamGrade $examGrade)
    {
        return view('exam-grades.show', compact('examGrade'));
    }

    public function edit(ExamGrade $examGrade)
    {
        $students = Student::all();
        $exams = Exam::all();
        return view('exam-grades.edit', compact('examGrade', 'students', 'exams'));
    }

    public function update(Request $request, ExamGrade $examGrade)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'exam_id' => 'required|exists:exams,id',
            'grade' => 'required|string|max:255',
        ]);

        $examGrade->update($validatedData);
        return redirect()->route('exam-grades.index')->with('success', 'Exam Grade updated successfully.');
    }

    public function destroy(ExamGrade $examGrade)
    {
        $examGrade->delete();
        return redirect()->route('exam-grades.index')->with('success', 'Exam Grade deleted successfully.');
    }
}
