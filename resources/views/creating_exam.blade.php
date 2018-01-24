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
</style>
</head>
<body>
<header class="jumbotron">
<div class="container">
<h1> exam information page </h1>



<div class="col-md-3">
<div class"thumbnail">

</div><div>
</div>
</header>


<div class="container" style="opacity:.9">
<div class="row">
<div class="panel panel-default">

<div class="panel-body"><h1>type exam information </h1></div>



<form action="storeExam" method="POST" enctype="mulipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<table >
<tr><td>exam name:</td><td><input type="text" name="name" ><td></tr>
<tr><td>start time :</td><td><input type="text" name="startTime" ><td><br>
<tr><td>end time:</td><td><input type="text" name="endtime" ><td><br>

<tr><td>start date :</td><td><input type="text" name="startDate" ><td><br>

<tr><td>end date:</td><td><input type="text" name="endDate" ><td><br>

<tr><td>period              :</td> <td><input type="text"name="period" ><td><br>
<tr><td>exam grade          :</td> <td><input type="text"name="exam_grade" ><td><br>
<tr><td>number of questions :</td><td><input type="text" name="num_of_questions" ><td><br>
<tr><td>examiner identifier :</td><td><input type="text" name="id_examiner" ><td><br>
<tr><td>course identifier   :</td><td><input type="text"name="id_course"><td><br>

</table >
<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>Add
</button>


</form>

<!--<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>save
</button>-->

</div>



</div>
</div>

<footer class="container">
All rights preserved for ali salah 
</footer>
</body>
</html>