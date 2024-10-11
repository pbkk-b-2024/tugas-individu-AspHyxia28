<?php

use Illuminate\Database\Migrations\Migration; // Make sure this line is present
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
