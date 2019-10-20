<h2 class="page-header">Giới thiệu
	<small>Về Qblog</small>
</h2>

<form action="admin/introDoEdit/{{$intro->id}}" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	<div class="form-group">
		<label>Giới thiệu</label>
		<textarea id="editor2" name="content">{{$intro->content}}</textarea>
	</div>

	<button class="btn btn-success">Cập nhật</button>
</form>

<script>
	CKEDITOR.replace('editor2');
</script>