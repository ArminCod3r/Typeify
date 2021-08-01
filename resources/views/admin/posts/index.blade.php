@extends('admin.layouts.app')

@section('main-content')
    
    @if( count($posts) > 0 )

        
        @foreach($posts as $post)
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10 posts-area">
                    <h3>
                        <a href="/posts/{{$post->id}}">
                            <i class="nav-icon fa fa-edit"></i>
                            {{ $post->title }}
                        </a>
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
                            <form action="{{route('posts.destroy', $post->id ) }}" method="POST" accept-charset="utf-8" class="pull-right">
                                {{ csrf_field() }}      
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" name="submit" value="DELETE" class="btn btn-danger">
                            </form>
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