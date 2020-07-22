@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Gallary</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <div class="container-fluid">
 	<h1 class="text-center  text-info" > Hotel Photos </h1>
 

<div class="row mt-3 ml-5 ">

<div class="col-lg-4 col-md-6 col-12">
  <a href="mumbai">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="2.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>MUMBAI SKYLINE</h1> 
      
    </div>
  </div>
</div>
</a></div>

<div class="col-lg-4 col-md-6 col-12 ">
<a href="goa">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="3.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>GOA SKYLINE</h1> 
      
    </div>
  </div>
</div>
</a></div>


<div class="col-lg-4 col-md-6 col-12  ">
<a href="bangalore">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="pic2.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>BANGALORE SKYLINE</h1> 
      
    </div>
  </div>
</div>
</a>
</div>

<div class="col-lg-4 col-md-6 col-12 mt-3">
<a href="rajasthan">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="pic3.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>RAJASTHAN SKYLINE</h1> 
      
    </div>
  </div>
</div>
</a>
</div>

<div class="col-lg-4 col-md-6 col-12 mt-3">
<a href="goa">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="pic4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>GOA SKYLINE-1</h1> 
      
    </div>
  </div>
</div>
</a>
</div>

<div class="col-lg-4 col-md-6 col-12 mt-3">
<a href="bangalore">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="pic.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>BANGALORE SKYLINE-1</h1> 
      
    </div>
  </div>
</div>
</a>
</div>
















</div>
</body>
</html>

@endsection