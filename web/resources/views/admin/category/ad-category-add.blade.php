<h2 class="page-header">Thể loại
	<small>Thêm</small>
</h2>

<form action="admin/categoryDoAdd" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" >  
	<div class="form-group">
		<label>Tên thể loại</label>
		<input type="text" name="name" class="form-control">
	</div>

	<button class="btn btn-primary">Thêm</button>
</form>