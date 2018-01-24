<html>
<head>
<title>
Exam 
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
</style>
</head>
<body>
<header class="jumbotron">
<div class="container">
<h1>the exam questions</h1>



<div class="col-md-3">
<div class"thumbnail">

</div><div>
</div>
</header>



<div class="container" style="opacity:.9">
<div class="row">
<div class="panel panel-default">



</div>

<h1>{{ $exam->name }} </h1>
<br>
@if($all_questions !=null)
<table class="table">
<tr>
<th>the question content</th>
<th> grade </th>
<th> langauge </th>
</tr>


@foreach($all_questions as $question)
<tr>


<td>
<form action="updatequestion/{{$question->id}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="hidden" name="_method" value="PATCH"/>
<input type="text" name="question_content" value="{{$question->content }}"/>
<input type="text" name="degree" value="{{$question->degree }}"/>
<input type="text" name="language" value="{{$question->language }}"/><br>
<textarea width=200  type="text" name="student_answer" placeHolder="please type your answer here"> </textarea><br>
<button>submit</button>
</form>
</td>



</tr>

@endforeach

</table>
@endif
<!--///////////////////////// true false questions//////////////////////// -->
@if($trueFalse_questions !=null)
<table class="table">

<tr>
<th>the True/false  questions </th>
</tr>
@foreach($trueFalse_questions as $trueFalse_question )
<tr>
<td>
<form action="" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="hidden" name="_method" value="PATCH"/>
<input type="text" name="" value="{{$trueFalse_question->content }}"/><br>
<input type ="radio" name="answer">True
<input type ="radio" name="answer">False 

</td></tr>
@endforeach
@endif
<!--//////////////////////////////////////////////////////////////////////////// -->

</div>
</div>

<footer class="container">
All rights preserved for ali salah 
</footer>
</body>
</html>