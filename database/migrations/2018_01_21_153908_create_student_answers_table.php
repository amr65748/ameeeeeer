<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->float('degree',8,4);;
            $table->integer('number');
            $table->integer('id_code_question');//->unsigned();
          //  $table->Foreign('id_code_question')->references('id')->on('code_question');
            $table->integer('id_student');//->unsigned();
           // $table->Foreign('id_student')->references('id')->on('students');
            $table->integer('id_question');//->unsigned();
           // $table->Foreign('id_question')->references('id')->on('questions');
            $table->integer('id_exam');//->unsigned();
           // $table->Foreign('id_exam')->references('id')->on('exams');

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
        Schema::dropIfExists('student_answers');
    }
}
