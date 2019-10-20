<h2 class="page-header">Thể loại
	<small>Danh sách</small>
</h2>

	<table id="table" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Id #</th>
				<th>Thể loại</th>
				<th>Số bài viết</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach($datas as $data)
			<tr>
				<td>{{$data->id}}</td>
				<td>{{$data->name}}</td>
				<td>{{App\Blog::where('id_category',$data->id)->count()}}</td>
				<td><button data-id="{{$data->id}}" data-page="categoryEdit" class="btn btn-info"><i class="fa fa-pencil"></i></button></td>
				<td><button data-id="{{$data->id}}" data-page="categoryDelete" class="btn btn-danger"><i class="fa fa-close"></i></button></td>
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