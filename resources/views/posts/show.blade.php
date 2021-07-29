@extends('layouts.app')

@section('content')
	
	@if( count($post) > 0 )

		<h2> {{ $post->title }} </h2>
		<hr/>

		<h4> {!! $post->body !!} </h4>

		<hr/>

		<div class="row">
			<div class="col-md-12 col-sm-12">
				<form action="{{ action('CommentController@store') }}"
			      method="POST" accept-charset="utf-8" enctype="multipart/form-data"
			      id="comment">
				  	{{ csrf_field() }}
				
					<div class="form-group">
						<label for="body">Your Comment</label>
			  			<textarea name="body" id="body" class="form-control" value="" style="resize: none;"> </textarea>

			  			@error('body')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>


				<div id="comment_store_status" class="comment_store_status">
					
				</div>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">

			</form>
			</div>

		</div>
	@endif

@endsection

@section('in-page-js')
<script>

//27346205
$('#comment').on('submit', function(e) {
	    e.preventDefault(); 

	    var comment = document.getElementById("body").value;

		if( !comment.trim() )
		{
	           $("#comment_store_status").empty();
	           alert('Comment cannot be empty');
	    }

	    else
	    {
			$("#comment_store_status").append('Please wait...');

		    $.ajax({
				'type': 'post',
		        'url': '/comment',
		        'data': $(this).serialize(),
		        success: function(msg)
		        {
		        	console.log(msg);

			    	document.getElementById("comment_store_status").style.color = '#1b8e2d';

		        	$("#comment_store_status").empty();
		        	$("#comment_store_status").append('Your comment has been submitted, Please wait for the admin approval');
		        },
			    error: function(XMLHttpRequest, textStatus, errorThrown) { 
			    	document.getElementById("comment_store_status").style.color = 'red';
			        $("#comment_store_status").empty();
		        	$("#comment_store_status").append('Failed');
			    } 
		    });
	    }

	});

</script>
@endsection