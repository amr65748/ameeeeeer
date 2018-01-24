<?php

namespace App;
use App\codeQuestions ;
use Illuminate\Database\Eloquent\Model;

class codeQuestions extends Model
{
    //
    protected $fillable=['content','test_case1','test_case1_result','test_case2','test_case2_result','test_case3','test_case3_result','student_answer','degree','language','type','id_exam'];
}
