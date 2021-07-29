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
					        	<i class="nav-icon fa fa-ban" id="ban_{{$comment->id}}" style="color:red"></i>
					        @else
					        	<i class="fas fa-check" id="allow_{{$comment->id}}" style="color:green"></i>
					        @endif
				        </td>
				        <td class="comment-col-center">
				        	<button class="btn btn-success" onclick="approve('{{$comment->id}}')">
				        		Approve
				        	</button>
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

@section('in-page-js')

<script>

function approve(comment_id) {

  $.ajax({
		'type': 'get',
        'url': 'comment/approve/'+comment_id,
        'data':'',
        success: function(msg)
        {
        	console.log(comment_id);
        	$("#ban_"+comment_id).removeClass("nav-icon").addClass("fa-check");
        	$("#ban_"+comment_id).css("color", "green");
        },
	    error: function(XMLHttpRequest, textStatus, errorThrown) { 
	    	alert("Failed");
	    }
    });

}

</script>
@endsection()