<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
</head>
<body>

  <div clssa="header">
  	 @section('header')
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">WebSiteName</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li><a href="/" class="active">Login</a></li>
		        <li><a href="list">Users List</a></li>
		        <li><a href="create">Create Account</a></li>
		      </ul>
		      
		    </div>
		  </div>
		</nav>
  	 @show
  </div>
  <div class="content">
  	 @yield('content')
  	
  </div>
  <div class="footer">
    @section('footer') 
	    <div class="footer">
			<p>Footer</p>
	    </div>
    @show
  </div>
</body>
</html>