@extends('layouts.app')


@section('in-page-style')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

@endsection

@section('content')



<div class="about-section paddingTB60 gray-bg">
    <div class="container">
        <div class="row">
			<div class="col-md-7 col-sm-6">

				<div class="about-title clearfix">
					<h1>About <span>ME :)</span></h1>
					<h3> Laravel CMS </h3>
					<p class="about-paddingB">This CMS has been buit based on the most popular framework, Laravel. The CMS main usage is for the Tutors and Bloggers.</p>

					<div class="about-icons"> 
		                <ul >

		                    <li>
			                    <a href="https://www.facebook.com/">
			                    	<i id="social-fb" class="fa fa-facebook-square fa-3x social"></i>
			                    </a>
		                    </li>

		                    <li>
			                    <a href="https://twitter.com/">
			                    	<i id="social-tw" class="fa fa-twitter-square fa-3x social"></i>
			                    </a>
		                    </li>

		                    <li>
			                    <a href="https://plus.google.com/">
			                    	<i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i>
			                    </a>
		                    </li>

		                    <li>
			                    <a href="mailto:SampleEmail@gmail.com">
			                    	<i id="social-em" class="fa fa-envelope-square fa-3x social"></i>
			                    </a>
		                    </li>
		                </ul>
					</div>
				</div>

			</div>

			<div class="col-md-5 col-sm-6" style="background-color: ">
				<div class="about-img">
					<img src="{{ url('img/profile.png') }}" alt="" width="95%">
				</div>
			</div>

        </div>
    </div>
</div>



@endsection