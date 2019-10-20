<h2 class="page-header">Bài viết
	<small>Sửa</small>
</h2>

<form action="admin/blogDoEdit/{{$blog->id}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	
	<div class="form-group">
		<label>Tiêu đề</label>
		<input type="text" name="title" class="form-control" value="{{$blog->title}}">
	</div>

	<div class="form-group">
		<label>Tóm tắt</label>
		<textarea class="form-control" name="short">{{$blog->short}}</textarea>
	</div>

	<div class="form-group">
		<label>Nội dung</label>
		<textarea id="editor1" name="content">{{$blog->content}}</textarea>
	</div>

	<div class="form-group">
		<label>Ảnh</label>
		<img src="img/{{$blog->img}}">
		<input name="img" type="file" class="form-control">
	</div>	

	<div class="form-group">
		<label>Nổi bật</label><br>

		<label class="radio-inline">
			<input @if($blog->highlight == 1) {{"checked"}} @endif type="radio" name="highlight" value="1">Có
		</label>

		<label class="radio-inline">
			<input @if($blog->highlight == 0) {{"checked"}} @endif type="radio" name="highlight" value="0">Không
		</label>
	</div>

	<div class="form-group">
		<label>Thể loại</label>
		<select class="form-control" name="id_category">
			@foreach($categories as $category)
				<option @if($category->id == $blog->id_category) {{"selected"}} @endif value="{{$category->id}}">{{$category->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label>Từ khóa</label>
		<input type="text" name="keywords" class="form-control" placeholder="Cách nhau bới dấu cách" value="{{$blog->keywords}}">
	</div>

	<button class="btn btn-success">Sửa</button>
</form>

<script type="text/javascript">
	CKEDITOR.replace('editor1',{
	 	 filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images'
	 });
</script>