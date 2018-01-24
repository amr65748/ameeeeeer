<html>
<head>
<title>
student
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
<h1> student page</h1>



<div class="col-md-3">
<div class"thumbnail">

</div><div>
</div>
</header>


<div class="container" style="opacity:.9">
<div class="row">
<div class="panel panel-default">

<div class="panel-body"><h1> features</h1></div>

<h2> go to an exam  </h2>
<form action="showExams" method="POST" enctype="mulipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>

<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>Show
</button>

</form>


<h2> Register a course </h2>
<form  display="in-line" action="" method="POST" enctype="mulipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>

<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>Start
</button>

</form>

</div>



<table class="table">
<tr>
<th>exam name</th> 
<th> Grade</th>
<th> number of questions</th>
<th> Exam time </th>
<th> Start </th>
</tr>

@foreach($allExams as $exam)
<tr>
<!--exam name section  -->
<td>

<p>{{ $exam->name}}</p>
</td>

<td>

<p>{{ $exam->exam_grade}}</p>
</td>



<td>

<p>{{$exam->num_of_questions}}</p>
</td>


<td>

<p>{{$exam->period}}</p>
</td>



<td>
<!-- show book of the section  -->
<form action="exam/{{$exam->id}} " method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25 onclick="submit()"/>
</form>
</td>

</tr>


@endforeach

</table>


</div>
</div>

<footer class="container">
All rights preserved for ali salah 
</footer>
</body>
</html>