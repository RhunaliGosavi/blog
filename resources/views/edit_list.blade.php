@extends('layouts.app')

@section('content')

<div class="container">

  @if (session('success'))
        <div class="alert alert-success" role="alert">
             {{ session('success') }}
        </div>
   @endif
	
<div class="col-lg-12">
	   @include('side_menu')

	   <div class="col-lg-8">
	   	 <form  method="POST" enctype="multipart/form-data" action="{{url('/update-data/'.$list_data[0]->id)}}">
                            {{csrf_field()}}


	   	<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Comments</th>
		        <th>File</th>
		        <th>Edit</th>
		       
		      </tr>
		    </thead>
        
		    <tbody>
		    	
		   
		    
		      <tr>
		        <td><input type="text" value="{{$list_data[0]->comment}}" name="comment"></td>
		        <td> <input type="file" name="file" > </td>
		        <!--<input type="hidden" name="id" value="{{$list_data[0]->id}}">-->
		        <td> <button type="submit" class="btn btn-primary col-lg-12 ">Update</button></td>
		      </tr>
		   
		     

		    </tbody>

        </table>
 </form>
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

