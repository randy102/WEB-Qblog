@extends('pages.master')

@section('des')
Giới thiệu
@endsection

@section('title')
Giới thiệu
@endsection

@section('content')

<!--Breadcrumb-->
<div class="row">
	<ol class="blog-breadcrumb">
		<li><a href="/">Trang chủ</a></li>
		<li class="active"><i class="fa fa-caret-right fa-fw"></i>Giới thiệu</li>
	</ol>	
</div>
<!--/Breadcrumb-->

<!--About Blog-->
<div class="row">
	
	<div class="title-group">
		Về QBlog
	</div>
	
	<div class="intro-content">
		{!!$intro->content!!}
	</div>
</div>
<!--/About BLog-->

<!--About Author-->
<div class="row">
	<div class="title-group">
		Về Tác Giả
	</div>
	
	@foreach($authors as $author)

	<div class="intro-author">
		<img src="img/{{$author->img}}" class="img-circle img-thumbnail" alt="">
		<ul>
		    <li>Tên: {{$author->user->name}}</li>
		    <li>Ngày sinh: {{$author->birth_date}}</li>
		    <li>Nơi ở: {{$author->place}}</li>   
		</ul>
	</div>

	<div class="intro-author-content">
		<b>Tự giới thiệu: </b> {!!$author->self_info!!}
	</div>

	@endforeach
	
</div>


<!--/About Author-->
@endsection