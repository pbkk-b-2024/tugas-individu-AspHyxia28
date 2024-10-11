<?php

use Illuminate\Database\Migrations\Migration; // Make sure this line is present
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamGradesTable extends Migration
{
    public function up()
    {
        Schema::create('exam_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->float('grade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exam_grades');
    }
}

