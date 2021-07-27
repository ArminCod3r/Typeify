<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		

		<link rel="stylesheet" href="{{ url('css/bootstrap4-4-1.min.css') }}"> 
		<script src="{{ url('js/jquery211.min.js') }}"></script>
		<script src="{{ url('js/slick.min.js') }}"></script>

		<link rel="stylesheet" href="{{ url('css/font-awesome-470.min.css') }}">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{ url('css/bootstrap341.min.css') }}">
		<script src="{{ url('js/jquery351.min.js') }}"></script>
		<script src="{{ url('js/jquery341.min.js') }}"></script>
		

		<title>{{ config('app.name', 'Typeify') }}</title>

		<link rel="stylesheet" href="{{ url('css/custom-style.css') }}">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		@yield('in-page-style')

		<!-- Fixed navbar -->
	    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

	     <div class="container-fluid">
	      <a class="navbar-brand" href="#"> {{ config('app.name', 'Typeify') }} </a>

	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarCollapse">

	        <ul class="navbar-nav me-auto mb-2 mb-md-0">

	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="/">Home</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="/about">About</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="/posts">Posts</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="/posts/create">Create-Post</a>
	          </li>
	          

	        </ul>

	      </div>
	     </div>
	    </nav>


	</head>

	<body>
		<div style="margin: 5%">
			@yield('content')
		</div>
	</body>

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('in-page-js')

</html>