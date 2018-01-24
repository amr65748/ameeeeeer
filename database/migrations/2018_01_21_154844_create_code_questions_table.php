<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::enableForeignKeyConstraints();        
        Schema::create('code_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->string('test_case1');
            $table->string('test_case1_result');

            $table->string('test_case2');
            $table->string('test_case2_result');

            $table->string('test_case3');
            $table->string('test_case3_result');

            $table->string('student_answer');
            $table->float('degree',6,4);
            $table->string('language');
            $table->integer('type');
            $table->integer('id_exam');//->unsigned()->nullable();;
            //$table->foreign('id_exam')->references('id')->on('exams');

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
        Schema::dropIfExists('code_questions');
    }
}
