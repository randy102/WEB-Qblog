@extends('pages.master')

@section('des')
Câu hỏi thường gặp
@endsection

@section('title')
Câu hỏi thường gặp
@endsection

@section('content')

<!--Breadcrumb-->
<div class="row">
	<ol class="blog-breadcrumb">
		<li><a href="/">Trang chủ</a></li>
		<li class="active"><i class="fa fa-caret-right fa-fw"></i>FAQs</li>
	</ol>	
</div>
<!--/Breadcrumb-->

<!--FAQs-->

@foreach($faqs as $faq)
<div class="row">
	
	<div class="title-group">
		{{$faq->quest}} 
	</div>
	
	<div class="intro-content">
		{!!$faq->ans!!}
		 		
	</div>
</div>
@endforeach




<!--/FAQs-->


@endsection