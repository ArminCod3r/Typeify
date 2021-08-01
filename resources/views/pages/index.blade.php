@extends('layouts.app')


@section('content')

<div class="container-fluid">
	
		@if( count($posts) > 0 )

			<div class="row">
			@foreach($posts as $key=>$post)
				<?php $key+=1;?>
				<div class="col-md-3" align="center">

					<a href="/posts/{{$post->id}}">
						<div><img src="/img/cover_images/{{$post->cover_image}}"></div>
				    	<div align="center" style="font-size: 18px;font-weight: bold;margin-top:10px;">
				    		
				    		
				    		@if( strlen( strip_tags(html_entity_decode($post->title)) ) > 8 )
								{{ mb_substr($post->title, 0, 8) }}...
							@else
							 	{{ $post->title }}
							@endif						

				    	</div>
			    	</a>

				</div>

				@if($key%4 == 0)
					</div>
					<hr/>
					<div class="row">	
				@endif
			@endforeach

		@else
			<p>No posts found!</p>
		@endif
</div>

@endsection