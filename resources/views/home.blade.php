@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


      @include('side_menu')
          


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                         </div>
                    @endif

                  @if ($errors->has('comment'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('comment')}}
                        </div>
                    @endif
                    @if ($errors->has('file'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('file')}}
                        </div>
                    @endif


                    @if (session('error'))
                          <div class="alert alert-danger" role="alert">
                               {{ session('error') }}
                          </div>
                     @endif

                      
                     <div class="col-lg-12">
                        <div class="col-lg-12 text-right">You are logged in!</div>
                     </div>


                     <div class="col-lg-12">
                        <div class="col-lg-12 text-left"><h3>Upload File Here</h3></div>
                     </div>

                     <div class="col-lg-12 margin-top">
                         
                          <form method="post" enctype="multipart/form-data" action="{{url('/upload-data')}}">
                            {{csrf_field()}}
                               <div class="row">
                                   <div class="col-lg-4"><input type="text" name="comment" placeholder="Add Comment"></div>
                                   <div class="col-lg-4"><input type="file" name="file"></div>
                                   

                               </div>
                               <div class="col-lg-12 text-center margin-top">
                                   <button type="submit" class="btn btn-primary col-lg-4 ">Submit</button>

                               </div>

                          </form>

                     </div>
                        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){


$('#upload_file').removeClass('inactive');

$('#upload_file').addClass('active');
});



    


</script>

