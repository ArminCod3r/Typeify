@extends('admin.layouts.app')

@section('main-content')

<div class="row">
    
    <div class="col-md-12 col-sm-12">
    
    @if( count($posts) > 0 )

    <table class="table table-hover">
        <thead>
          <tr>
            <th>Title</th>
            <th>Body</th>
            <th></th>
            <th></th>          
          </tr>
        </thead>

        <tbody>
        
        @foreach($posts as $post)
            <tr>
                <td>
                    <a href="/posts/{{$post->id}}">
                        <i class="nav-icon fa fa-edit"></i>
                        {{ $post->title }}
                    </a>                        
                </td>

                <td>
                    @if( strlen( strip_tags(html_entity_decode($post->body)) ) > 120 )
                        {!! mb_substr($post->body, 0, 110) !!}...
                    @else
                        {!! $post->body !!}
                    @endif
                </td>

                <td>
                    <a href="post/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                </td>

                <td>
                    <form action="{{route('post.destroy', $post->id ) }}" method="POST" accept-charset="utf-8" class="pull-right">
                        {{ csrf_field() }}      
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" name="submit" value="DELETE" class="btn btn-danger">
                    </form>
                </td>
            </tr>
                   
                
            </div>
        @endforeach

    </tbody>

</table>

    @else
        <p>No posts found!</p>
    @endif

@endsection