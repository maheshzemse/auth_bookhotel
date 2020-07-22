@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
	<!-- <h1 class=" text-center ">CONTACT US</h1>
	<p > SKYLINE HOTEL<br>
	<P>ADDRESS:New Panvel<br>

	PIN CODE:410207<br>
	MOBILE NO:9975863133/8087780445</p>
 -->

 	<!--------adding a Form------------------------>
 	<h1 class="text-center text-info">CONTACT</h1>

 						<form>
							<label class="ml-5">Name</label>
							<div class="form-group col-lg-5" >
							<input style="background-color:#76D7C4" type="text" name="name" class="form-control  text-white p-3 ml-4" placeholder="Enter the Name">
							</div>

								
							
							<label class="ml-5">Email</label>
							<div class="form-group col-lg-5">
							
							<input style="background-color:#76D7C4" type="email" name="email" class="form-control  text-white p-3 ml-4" placeholder="Enter the email">
								
							</div>


							<label class="ml-5">Mobile</label>
							<div class="form-group col-lg-5">
							
							<input style="background-color:#76D7C4" type="number" name="mob" class="form-control  text-white p-3 ml-4" placeholder="Enter the Mobile Number">
							</div>

							<div class="form-group col-lg-5">
							<input type="submit" name="submit" class="btn btn-info  ml-4" value="Send" >
								
							</div>
			

































</div>

</body>
</html>

@endsection