@extends('admin.layouts.app')

@section('main-content')

<div class="row">
	
	<div class="col-md-12 col-sm-12">

		@if( count($comments) > 0 )

			<table class="table table-hover">
				<thead>
			      <tr>
			        <th>ID</th>
			        <th>User</th>
			        <th>Comment</th>
			        <th  class="comment-col-center">Approval stat.</th>
			        <th  class="comment-col-center">Delete</th>		        
			      </tr>
			    </thead>

			    <tbody>

				@foreach($comments as $key=>$comment)
					<tr>
						<td>{{$key+=1}}</td>
				        <td>{{$comment->user[0]->name}}</td>
				        <td>{{$comment->body}}</td>
				        <td class="comment-col-center">
					        @if($comment->approved == 0)
					        	<i class="nav-icon fa fa-ban" style="color:red"></i>
					        @else
					        	<i class="fas fa-check" style="color:green"></i>
					        @endif
				        </td>
				        <td class="comment-col-center">
				        	<button class="btn btn-success">Approve</button>
				        	<button class="btn btn-primary">Edit</button>
				        	<button class="btn btn-danger">Del</button>
				        </td>
			        </tr>
				@endforeach

				</tbody>

			</table>

		@else
			<p>No comments</p>
		@endif

	</div>

</div>
@endsection