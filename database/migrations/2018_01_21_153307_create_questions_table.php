<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->string('type');
            $table->integer('degree');
            $table->integer('id_exam');//->unsigned();
           // $table->foreign('id_exam')->references('id')->on('exams');
           $table->string('choose1');
           $table->string('choose2');
           $table->string('choose3');
           $table->string('choose4');
           $table->string('choosen_answer');

           
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
        Schema::dropIfExists('questions');
    }
}
