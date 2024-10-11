<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubjectsToSubjectsTable extends Migration
{
    public function up()
    {
        DB::table('subjects')->insert([
            ['name' => 'Math'],
            ['name' => 'Science'],
            ['name' => 'Art'],
            ['name' => 'History'],
            ['name' => 'Physical']
        ]);
    }

    public function down()
    {
        DB::table('subjects')->whereIn('name', ['Math', 'Science', 'Art', 'History', 'Physical'])->delete();
    }
}
