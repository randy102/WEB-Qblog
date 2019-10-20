<h2 class="page-header">Thông tin liên lạc
	<small>Admin</small>
</h2>

<form action="admin/infoDoEdit" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	<div class="form-group">
		<label><i class="fa fa-phone fa-fw"></i> Số điện thoại</label>
		<input type="text" name="phone" class="form-control" value="{{$phone->content}}">
	</div>

	<div class="form-group">
		<label><i class="fa fa-envelope fa-fw"></i> Email</label>
		<input type="email" name="email" class="form-control" value="{{$email->content}}">
	</div>

	<button class="btn btn-success">Cập nhật</button>
</form>

