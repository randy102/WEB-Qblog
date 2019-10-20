<h2 class="page-header">Thể loại
	<small>Sửa</small>
</h2>

<form action="admin/categoryDoEdit/{{$data->id}}" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	<div class="form-group">
		<label>Tên thể loại</label>
		<input type="text" name="name" value="{{$data->name}}" class="form-control">
	</div>

	<button class="btn btn-success">Sửa</button>
</form>