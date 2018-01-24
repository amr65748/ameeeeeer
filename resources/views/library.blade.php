<html>
<head>
<title>
Library
</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"> </link>
<style type="text/css">
body{
    background:url("{{asset('Images/(16)TVEgy.com.jpg')}}") no-repeat center center fixed;
    background-size:100% auto;

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
<h1>the book store</h1>
<p> reading a good book like taking a journy</p>
<a href="admin">Admin</a>

<div class="col-md-3">
<div class"thumbnail">

</div><div>
</div>
</header>



<div class="container" style="opacity:.9">
<div class="row">


@foreach($sections as $section)
<div class="col-md-3">
<div class"thumbnail">
<img src="Images/{{$section->image_name}}"  width=200 height=200>
<h1 ><a class="btn btn primary">{{$section->section_name}} </a></h1>
</div>
</div>
@endforeach
<!--
<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(17)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">History</a></h1>
</div>
</div>

<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(18)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">Science</a></h1>
</div>
</div>


<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(19)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">Elictrical</a></h1>
</div>
</div>



<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(28)TVEgy.com.jpg')}}" width=200 height=200>
<h1 ><a class="btn btn primary">Electronic</a></h1>
</div>
</div>

<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(29)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">Electronic</a></h1>
</div>
</div>


<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(29)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">Electronic</a></h1>
</div>
</div>


<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(29)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">Electronic</a></h1>
</div>
</div>



<div class="col-md-3">
<div class"thumbnail">
<img src="{{asset('Images/(29)TVEgy.com.jpg')}}"  width=200 height=200>
<h1 ><a class="btn btn primary">Electronic</a></h1>
</div>
</div>
-->

</div>
</div>

<footer class="container">
All rights preserved for ali salah 
</footer>
</body>
</html>