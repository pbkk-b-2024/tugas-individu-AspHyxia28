<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassStudent extends Pivot
{
    use HasFactory;

    protected $table = 'class_student';
}
