<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'gender', 'address', 'phone', 'email'];

    public function classStudents()
    {
        return $this->belongsToMany(ClassRoom::class, 'class_student')
                    ->withPivot('enrollment_date');
    }

    public function examGrades()
    {
        return $this->hasMany(ExamGrade::class);
    }
}
