@extends('custom_layouts.app')

@section('content')
	
	@if( count($posts) > 0 )

		
		@foreach($posts as $post)
			<div class="row">

				<div class="col-md-1"></div>

				<div class="col-md-10 posts-area">
					<h3>
						<a href="/posts/{{$post->id}}"> {{ $post->title }} </a>
					</h3>


					<div class="row">

						<div class="col-md-9 posts-content">
							@if( strlen( strip_tags(html_entity_decode($post->body)) ) > 120 )
								{!! mb_substr($post->body, 0, 110) !!}...
							@else
							 	{!! $post->body !!}
							@endif
						</div>

						<div class="col-md-1">
							<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
						</div>

						<div class="col-md-1">
							<Button class="btn btn-danger"> Delete </Button>
						</div>
						
					</div>
						

				</div>

				<div class="col-md-1"></div>
				
			</div>
			<br/>
		@endforeach

	@else
		<p>No posts found!</p>
	@endif

@endsection