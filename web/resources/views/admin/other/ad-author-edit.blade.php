<h2 class="page-header">Tác giả
	<small>Sửa</small>
</h2>
<form action="admin/authorDoEdit/{{$author->id}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	

	<div class="form-group">
		<label>Tác giả</label>
		<input value="{{App\User::find($author->id_user)->name}}"  type="text" name="" class="form-control" disabled>
	</div>

	<div class="form-group">
		<label>Ảnh đại diện</label>
		<img src="img/{{$author->img or "user.png"}}">
		<input  type="file" name="img" class="form-control">
	</div>

	<div class="form-group">
		<label>Ngày sinh</label>
		<input type="date" value="{{$author->birth_date}}" name="birth_date" class="form-control">
	</div>

	<div class="form-group">
		<label>Nơi ở</label>
		<input type="text" value="{{$author->place}}" name="place" class="form-control">
	</div>

	<div class="form-group">
		<label>Tự giới thiệu</label>
		<textarea name="self_info" id="editor">{{$author->self_info}}</textarea>
	</div>

	

	<button class="btn btn-success">Sửa</button>
</form>

<script>
	CKEDITOR.replace('editor');
</script>