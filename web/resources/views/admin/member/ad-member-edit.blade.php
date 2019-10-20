<h2 class="page-header">Thành viên
	<small>Sửa</small>
</h2>



<form action="/admin/memberDoEdit/{{$data->id}}" method="post" accept-charset="utf-8">
	
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	
	<div class="form-group">
		<label><i class="fa fa-user fa-fw"></i> User</label>
		<input value="{{$data->name}}" type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
		<label><i class="fa fa-envelope fa-fw"></i> Email</label>
		<input value="{{$data->email}}" type="text" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label><i class="fa fa-lock fa-fw"></i> Mật khẩu mới</label>
		<input value="" type="text" name="password" class="form-control">
	</div>

	<div class="form-group">
		<label>Cấp bậc</label>

		<label class="radio-inline">
			<input @if($data->level == 0) {{'checked'}} @endif value="0" type="radio" name="level">Thành viên
		</label>

		<label class="radio-inline">
			<input @if($data->level == 1) {{'checked'}} @endif value="1" type="radio" name="level">Tác giả
		</label>
	</div>
	
	<button class="btn btn-success">Sửa</button>
</form>



