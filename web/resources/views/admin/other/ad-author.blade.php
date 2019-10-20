<h2 class="page-header">Tác giả
	<small>Danh sách</small>
</h2>

<table id="table" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Id #</th>
				<th>Tác giả</th>
				<th>Ảnh đại diện</th>
				<th>Số bài viết</th>
				<th>Ngày đăng ký</th>
				<th>Sửa</th>
			</tr>
		</thead>
		<tbody>
			@foreach($authors as $author)
			<tr>
				<td>{{$author->id}}</td>

				<td>{{$author->user->name}}</td>

				<td><img src="img/{{$author->img or "user.png"}}"></td>

				<td>{{$author->user->blogs->count()}}</td>

				<td>{{$author->created_at}}</td>

				<td><button data-id="{{$author->id}}" data-page="authorEdit" class="btn btn-info"><i class="fa fa-pencil"></i></button></td>	
			</tr>
			@endforeach
		</tbody>
	</table>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
			$('#table_wrapper').addClass('form-inline');
        	$('select').addClass('form-control');
        	$('input').addClass('form-control');
		});	
	</script>