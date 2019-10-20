<h2 class="page-header">Thành viên
	<small>Danh sách</small>
</h2>

	<table id="table" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Id #</th>
				<th>User</th>
				<th>Email</th>
				<th>Ngày đăng ký</th>
				<th>Cấp</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->created_at}}</td>
				<td>{{$user->level}}</td>
				<td><button data-id="{{$user->id}}" data-page="memberEdit" class="btn btn-info"><i class="fa fa-pencil"></i></button></td>
				<td><button data-id="{{$user->id}}" data-page="memberDelete" class="btn btn-danger"><i class="fa fa-close"></i></button></td>
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
