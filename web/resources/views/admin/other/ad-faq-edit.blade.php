<h2 class="page-header">FAQs
	<small>Sửa</small>
</h2>

<form action="admin/faqDoEdit/{{$faq->id}}" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 
	<div class="form-group">
		<label>Câu hỏi</label>
		<input type="text" name="quest" class="form-control" value="{{$faq->quest}}">
	</div>

	<div class="form-group">
		<label>Trả lời</label>
		<textarea id="editor2" name="ans">{{$faq->ans}}</textarea>
	</div>

	<button class="btn btn-success">Sửa</button>
</form>

<script>
	CKEDITOR.replace('editor2');
</script>