@extends('layouts.app')

@section('content')

<div class="container">
	
<div class="col-lg-12">
	   @include('side_menu')

	   <div class="col-lg-8">
	   	<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Comments</th>
		        <th>File</th>
		        <th>Edit</th>
		        <th>delete</th>
		      </tr>
		    </thead>
		    <tbody>
		    	@foreach($list_data as $list)
		      <tr>
		        <td>{{$list->comment}}</td>
		        <td>  <img src="{{asset('/userfiles/'.$list->file) }}" alt="" /></td>
		        <td><a  class="btn btn-primary" href="{{url('/edit/'.$list->id)}}" >Edit</a></td>
		        <td><a  class="btn btn-primary" href="{{url('/delete/'.$list->id)}}" >Delete</a></td>



		      </tr>
		      @endforeach
		    </tbody>
        </table>

	   </div>

</div>


</div>


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){


$('#list').removeClass('inactive');

$('#list').addClass('active');
});


    


</script>

