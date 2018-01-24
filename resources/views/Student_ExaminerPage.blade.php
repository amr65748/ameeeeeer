<html>
<head>
<title>
Student Examiner page 
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
<h1></h1>



<div class="col-md-3">
<div class"thumbnail">

</div><div>
</div>
</header>


<div class="container" style="opacity:.9">
<div class="row">
<div class="panel panel-default">

<div class="panel-body"><h1> features</h1></div>

<h2> Student  </h2>
<form action="showExams" method="POST" enctype="mulipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>

<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>GO
</button>

</form>


<h2> Examiner  </h2>
<form  display="in-line" action="examiner" method="POST" enctype="mulipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>

<button class="btn btn-default" type="submit">
<img src="{{ asset('Images/(18)TVEgy.com.jpg')}}" width="25" height=25>GO
</button>

</form>

</div>



</div>
</div>

<footer class="container">
All rights preserved for ali salah 
</footer>
</body>
</html>