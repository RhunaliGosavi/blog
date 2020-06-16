

@extends('layout')

 @section('content')
   <div class="container">
  <h2>User List</h2>
          
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($result as $res)
      <tr>
        <td>{{$res->name}}</td>
        <td>{{$res->email}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 @endsection