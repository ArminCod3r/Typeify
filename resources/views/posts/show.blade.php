@extends('layouts.app')

@section('content')
	
	@if( count($post) > 0 )

		<h2> {{ $post->title }} </h2>
		<hr/>

		<h4> {!! $post->body !!} </h4>

		<hr/>
	@endif

@endsection