
@extends('navbar')
 @section('data')

<!DOCTYPE html>
<html>
<head>
	<title>List</title>
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
	<div class="container ">
	<h1 class="text-center mt-5">Booking Information</h1>
	<a style="float: right" href="/home" class="btn btn-info">Go To Booking</a>
	  <span>Welcome {{ Auth::user()->name }}</span><br>

    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
{{Session::get('status')}}  
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


    @endif


	  		


	<table class="table table-bordered table-striped table-hover mt-5 col-lg-6">
  <thead>
    <tr>
      <th scope="col">Place</th>
      	  <th scope="col">check-In</th>
      	<th scope="col">check-Out</th>
      	<th scope="col">No.Of Adult</th>
      	<th scope="col">No.Of Child</th>
      	<th scope="col">No.Of Rooms</th>
        <th scope="col">Cancle Booking</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $items)
    <tr>

 	      <td>{{$items->place}}</td>
      	  <td>{{$items->checkin}}</td>
      	  <td>{{$items->checkout}}</td>
      	  <td>{{$items->adult}}</td>
      	  <td>{{$items->child}}</td>
      	  <td>{{$items->room}}</td>
      <td class=""><a href="delete/{{$items->id}}"><i class="fa fa-times"></i></a></td>


        
    </tr>

    	@endforeach
     </tbody>
</table>

</div>
</body>
</html>
@endsection