<h2 class="page-header">Bình luận
	<small>Danh sách</small>
</h2>

	<table id="table" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Id #</th>
				<th>Bình luận</th>
				<th>User</th>
				<th>Bài viết</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach($comments as $comment)
			<tr>
				<td>{{$comment->id}}</td>
				<td>{{$comment->content}}</td>
				<td>{{$comment->user->name}}</td>
				<td>{{$comment->blog->title}}</td>
				<td><button data-page="commentDelete" data-id="{{$comment->id}}" class="btn btn-danger"><i class="fa fa-close"></i></button></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
	<script type="text/javascript">
		$(document).ready( function () {
   			$('#table').DataTable();
   			$('#table_wrapper').addClass('form-inline');
        	$('select').addClass('form-control');
        	$('input').addClass('form-control');
		});
	</script>