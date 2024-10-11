<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'gender', 'address', 'phone', 'email', 'subject_id'];

    public function classes()
    {
        return $this->hasMany(ClassRoom::class);
    }
}
