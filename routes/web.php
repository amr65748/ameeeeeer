<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin',function()
{
    return view('admin');
});

Route::get('examiner',function()
{
    return view('examiner');
});

 Route::post('creating_exam',function(){
     return view('creating_exam');
 });

Route::post('storeExam','creatingExamController@insert_exam_info');   

Route::get('creating_exam',function(){
    return view('creating_exam');
});

 Route::get('exam_questions',function()
 {
     return view('exam_questions');
 });


 Route::post('storeQuestionInfo','creatingQuestionsController@insert_question_info');



 ///////////////////////student//////////////////////////////
Route::post('HomePageStudent',function(){
return view('HomePageStudent');

 });

 Route::post('showExams','creatingExamController@retrieve_exams');
  
 Route::get('showExams','creatingExamController@retrieve_exams');


Route::get('Student_ExaminerPage',function(){

    return view('Student_ExaminerPage');
});






Route::post('examiner',function(){
    return view('examiner');
    
     });




Route::post('exam/{id?}','creatingQuestionsController@retrive_question_info');

Route::patch('exam/updatequestion/{id}','creatingQuestionsController@insertCodeQuesrtionAnswer');

Route::get('good_luck',function()
{
    return view('good_luck');
});


Route::post('multipleChooseQuestion','creatingQuestionsController@storechooseAndtrueQuestion');


//Route::post('exam/{id?}','creatingQuestionsController@retrive_trueFalse_question');
