<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date'];

    public function examGrades()
    {
        return $this->hasMany(ExamGrade::class);
    }
}
