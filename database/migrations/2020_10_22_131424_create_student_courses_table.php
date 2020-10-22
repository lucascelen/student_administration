<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->id('student_id');
            $table->integer('semester');

        });

        DB::table('student_courses')->insert(
            [
                [
                    'course_id' => 1,
                    'student_id' => 1,
                    'semester' => 1
                ],
                [
                    'course_id' => 1,
                    'student_id' => 2,
                    'semester' => 1
                ],
                [
                    'course_id' => 4,
                    'student_id' => 3,
                    'semester' => 2
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
