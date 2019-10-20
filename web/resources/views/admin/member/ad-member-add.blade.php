<h2 class="page-header">Thành viên
	<small>Thêm</small>
</h2>

<form action="/admin/memberDoAdd" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	<div class="form-group">
		<label><i class="fa fa-user fa-fw"></i> User</label>
		<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label><i class="fa fa-envelope fa-fw"></i> Email</label>
		<input type="text" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label><i class="fa fa-lock fa-fw"></i> Mật khẩu</label>
		<input type="text" name="password" class="form-control">
	</div>

	<div class="form-group">
		<label>Cấp bậc</label><br>

		<label class="radio-inline">
			<input type="radio" value="0" name="level">Thành viên
		</label>

		<label class="radio-inline">
			<input type="radio" value="1" name="level">Tác giả
		</label>
	</div>

	<button class="btn btn-primary">Thêm</button>
</form>