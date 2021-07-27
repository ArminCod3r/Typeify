@extends('custom_layouts.app')


@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3" align="center">
			<div><img src="{{ url('/img/tut.png') }}"></div>
	    	<div align="center" style="font-size: 18px;font-weight: bold;margin-top:10px;">
	    		Tutorial-1
	    	</div>
		</div>

		<div class="col-md-3" align="center">
			<div><img src="{{ url('/img/blog.png') }}"></div>
	    	<div align="center" style="font-size: 18px;font-weight: bold;margin-top:10px;">
	    		Blog-1
	    	</div>
		</div>

		<div class="col-md-3" align="center">
			<div><img src="{{ url('/img/tut.png') }}"></div>
	    	<div align="center" style="font-size: 18px;font-weight: bold;margin-top:10px;">
	    		Tutorial-2
	    	</div>
		</div>

		<div class="col-md-3" align="center">
			<div><img src="{{ url('/img/blog.png') }}"></div>
	    	<div align="center" style="font-size: 18px;font-weight: bold;margin-top:10px;">
	    		Blog-2
	    	</div>
		</div>
	</div>	
</div>

@endsection