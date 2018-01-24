<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::disableForeignKeyConstraints();
        
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('startDate');
            $table->string('startTime');
            $table->string('endDate');
            $table->string('endtime');
            $table->integer('period');
            $table->integer('exam_grade');
            $table->integer('num_of_questions');
            $table->integer('id_examiner');//->unsigned()->nullable();;
           // $table->foreign('id_examiner')->references('id')->on('examiners');
            $table->integer('id_course');//->unsigned();
            //$table->Foreign('id_course')->references('id')->on('courses');
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
        Schema::dropIfExists('exams');
    }
}
