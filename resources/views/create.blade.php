
@extends('layout')


   @section('content')
    <form action="/createSubmit" method="post">
      	 @csrf
      	   <div class="form-group">
		    <label for="pwd">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
		  </div>
		
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
   @endsection