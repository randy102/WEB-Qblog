<h2 class="page-header">FAQs
	<small>Câu hỏi thường gặp</small>
</h2>
<!--Add FAQ-->
<form action="admin/faqDoAdd" method="post" accept-charset="utf-8">
	<input name="_token" type="hidden" value="{{{ csrf_token() }}}" > 

	<div class="form-group">
		<label>Câu hỏi</label>
		<input type="text" name="quest" class="form-control">
	</div>

	<div class="form-group">
		<label>Trả lời</label>
		<textarea name="ans" id="editor2"></textarea>
	</div>

	<button class="btn btn-primary">Thêm</button>
</form>
<!--/Add FAQ-->

<hr>

<!--FAQ list-->
	<table id="table" class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Id #</th>	
				<th>Câu hỏi</th>
				<th>Ngày đăng</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach($faqs as $faq)
			<tr>
				<td>{{$faq->id}}</td>	
				<td>{{$faq->quest}}</td>
				<td>{{$faq->created_at}}</td>
				
				<td><button data-id="{{$faq->id}}" data-page="faqEdit" class="btn btn-info"><i class="fa fa-pencil"></i></button></td>
				<td><button data-id="{{$faq->id}}" data-page="faqDelete" class="btn btn-danger"><i class="fa fa-close"></i></button></td>
			</tr>
			@endforeach
		</tbody>
	</table>
<!--/FAQ list-->

<script>
	CKEDITOR.replace('editor2');
	$('#table').DataTable();
	$('#table_wrapper').addClass('form-inline');
    $('select').addClass('form-control');
    $('input').addClass('form-control');
</script>