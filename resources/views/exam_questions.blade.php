<html>
<head>
<title>
admin
</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"> </link>
<style type="text/css">
body{
   /*background:url("{{asset('Images/(16)TVEgy.com.jpg')}}") no-repeat center center fixed;*/
    background-size:100% auto;
    background-color:green ;
}
header{
opacity:0.7;
}
h1{
    color:white;
}
footer{
    background-color:#fff;
    opacity:0.9;
    text-align:center;   
}


.show {
 display:block;
}

.hide {
 display:none;
}
</style>
<!--////////////////////////////////////////////////////////////////-->

<!--///////////////////////////////////////////////////////////////////-->
</head>
<body>
<header class="jumbotron">
<div class="container">



<div class="col-md-3"><div class"thumbnail"></div>

</header>


<div class="container" style="opacity:.9">
<div class="row">
<div class="panel panel-default">


<h2> creating new question </h2>
<form  name="form1" display="in-line" action="" method="POST" enctype="mulipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
Questions type :<select name ="Question_type"  onchange="addQuestion();">
<option value="True/false"> choose A Question type from this list</option>
<option value="True/false"> True/false</option>
<option value="code_question"  > code question</option>
<option value="multiple choose" > multiple Choose</option>
</select>
</form>




<!--
<button id ="b" class="btn btn-default" type="submit" >
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>Add 
</button>-->

<!--////////////////////code_question/////////////////////-->
<div id="code_question">
<form action="storeQuestionInfo" method="POST" enctype="mulipart/form-data" class="hide" id="codeForm">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<table >

<tr><td> content:</td><td><textarea type="text" name="content" ></textarea><td></tr>

<tr><td> test case1  :</td><td><input type="text" name="test_case1" ></td>
<td>  test case1 result :</td><td><input type="text" name="test_case1_result" ></td></tr>


<tr><td> test case2  :</td><td><input type="text" name="test_case2" ></td>
<td>  test case2 result :</td><td><input type="text" name="test_case2_result" ></td></tr>


<tr><td> test case2  :</td><td><input type="text" name="test_case3" ></td>
<td>  test case2 result :</td><td><input type="text" name="test_case3_result" ></td></tr>


<tr><td>degree :</td><td><input type="text" name="degree" ><td><br>

<tr><td>language :</td><td><input type="text" name="language" ><td><br>

<tr><td> type :</td><td><input type="text" name="type" ><td><br>

<tr><td>exam id :</td><td><input type="text" name="id_exam" ><td><br>
</table>
<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>create
</form>
</div>
<!--////////////////////true/false Q/////////////////////-->
<div id="True_False_question">
<form action="multipleChooseQuestion" method="POST" enctype="mulipart/form-data" class="hide" id="TFform">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<table >
<tr><td>question type is :</td><td> <input type="radio" name="type" value="true false" checked="checked">true/false questions</td></tr>

<tr><td> Question_content:</td><td><textarea type="text" name="content" style=" width:500;" ></textarea><td></tr>
<tr><td> <input type="radio" name="choosen_answer" value="True"> True</td></tr>
<tr><td> <input type="radio" name="choosen_answer" value="False"> False</td></tr>
<tr><td>degree :</td><td> <input type="text" name="degree"></td></tr>
<tr><td>exam id :</td><td> <input type="text" name="id_exam"></td></tr>

</table>
<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>create
</form>
</div>

<!--/////////////////multiple_Choice_question////////////////////////-->
<div id="multiple_Choice_question">
<form action="multipleChooseQuestion" method="POST" enctype="mulipart/form-data" class="hide" id="MchoosForm">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<table >
<tr><td>question type is :</td><td> <input type="radio" name="type" value="multiple choose" checked="checked">multiple choise questions  </td></tr>
<tr><td> question content:</td><td><textarea type="text" name="content" style="width:500;"></textarea><td></tr>
<tr><td>choose1 :</td><td> <input type="text" name="choose1"></td></tr>
<tr><td>choose2 :</td><td> <input type="text" name="choose2"></td></tr>
<tr><td>choose3 :</td><td> <input type="text" name="choose3"></td></tr>
<tr><td>choose4 :</td><td> <input type="text" name="choose4"></td></tr>
<tr><td>chossen answer :</td><td> <input type="text" name="choosen_answer"></td></tr>


<tr><td>degree :</td><td> <input type="text" name="degree"></td></tr>
<tr><td>exam id :</td><td> <input type="text" name="id_exam"></td></tr>
</table>
<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>create
</form>
</div>

<!--/////////////////////////////////////////-->





</div>


</div>
</div>
</div>
</div>
<script type="text/javascript">
 //document.getElementById("b").addEventListener("click",Question_area);
 var code_questionDiv=document.getElementById('code_question');
 var True_False_questionDiv=document.getElementById('True_False_question');
 var multiple_Choice_questionDiv=document.getElementById('multiple_Choice_question');

 var TFform =document.getElementById('TFform');
 var  MchoosForm =document.getElementById('MchoosForm');
 var formC =document.getElementById('codeForm');

function addCodeQuestion()
{
  
    MchoosForm.style.display = 'none';
    formC.style.display = 'block';
    TFform.style.display = 'none';
} 

function addTrueFalseQuestion()
{
    MchoosForm.style.display = 'none';
    formC.style.display = 'none';
    TFform.style.display = 'block';
}

function addmultiplechooseQoestion()
{  
    MchoosForm.style.display = 'block';
    formC.style.display = 'none';
    TFform.style.display = 'none';
}



function addQuestion() {
 var selsectedOption=document.form1.Question_type.value; // get the chosen value
 if(selsectedOption==="True/false" ){addTrueFalseQuestion();}
 else if(selsectedOption==="code_question" ){addCodeQuestion();}
 else if(selsectedOption==="multiple choose" ){addmultiplechooseQoestion();}
}


</script>
<footer class="container">

All rights preserved for ali salah 
</footer>
</body>
</html>