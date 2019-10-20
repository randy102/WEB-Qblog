<h2 class="page-header">Bài viết
	<small>Danh sách</small>
</h2>

	<table id="table" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Id #</th>
				<th>Tiêu đề</th>
				<th>Thể loại</th>
				<th>Tóm tắt</th>
				<th>Tác giả</th>
				<th>Lượt xem</th>
				<th>Nổi bật</th>
				<th>Ngày đăng</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach($blogs as $blog)

			<tr>
				<td>{{$blog->id}}</td>
				<td>{{$blog->title}}</td>
				<td>{{$blog->category->name}}</td>
				<td>{{$blog->short}}</td>
				<td>{{$blog->author->name}}</td>
				<td>{{$blog->views}}</td>
				<td>{{$blog->highlight}}</td>
				<td>{{$blog->created_at}}</td>
				<td><button data-id="{{$blog->id}}" data-page="blogEdit" class="btn btn-info"><i class="fa fa-pencil"></i></button></td>
				<td><button data-id="{{$blog->id}}" data-page="blogDelete" class="btn btn-danger"><i class="fa fa-close"></i></button></td>
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
	} );
</script>