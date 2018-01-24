<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->float('student_grade');
            $table->string('type');
            $table->integer('id_student');//->unsigned();
            //$table->Foreign('id_student')->references('id')->on('sutudents');
            $table->integer('id_course');//->unsigned();
           // $table->Foreign('id_course')->references('id')->on('courses');
            $table->integer('id_assignment');//->unsigned();
            //$table->Foreign('id_assignment')->references('id')->on('assignments');
            $table->integer('id_exam');//->unsigned();
            //$table->Foreign('id_exam')->references('id')->on('exams');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
