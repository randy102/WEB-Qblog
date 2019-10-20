<h2 class="page-header">Bài viết
	<small>Thêm</small>
</h2>

<form action="admin/blogDoAdd" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 

	<div class="form-group">
		<label>Tiêu đề</label>
		<input type="text" name="title" class="form-control">
	</div>

	<div class="form-group">
		<label>Tóm tắt</label>
		<textarea class="form-control" name="short"></textarea>
	</div>

	<div class="form-group">
		<label>Nội dung</label>
		<textarea id="editor1" name="content"></textarea>
	</div>

	<div class="form-group">
		<label>Ảnh</label>
		<input type="file" name="img" class="form-control">
	</div>	

	<div class="form-group">
		<label>Nổi bật</label><br>

		<label class="radio-inline">
			<input type="radio" name="highlight" value="1">Có
		</label>

		<label class="radio-inline">
			<input type="radio" name="highlight" value="0">Không
		</label>
	</div>

	<div class="form-group">
		<label>Thể loại</label>
		<select name="id_category" class="form-control">
			@foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label>Từ khóa</label>
		<input type="text" name="keywords" class="form-control" placeholder="Cách nhau bới dấu cách">
	</div>

	<button class="btn btn-primary">Thêm</button>
</form>

<script type="text/javascript">
	 CKEDITOR.replace('editor1',{
	 	 filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images'
	 });
</script>

	
