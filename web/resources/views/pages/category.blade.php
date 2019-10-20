@extends('pages.master')

@section('des')

Tổng hợp những bài viết liên quan đến {{$category->name}}

@endsection

@section('keywords')
{{$category->name}}
@endsection

@section('title')

{{$category->name}}

@endsection

@section('content')

<!--Left Bar-->

	<!--Category List-->
	<div class="row">
		<div class="title-group">
			{{$category->name}}
		</div>

		<div class="newest-wrap">

			@foreach($blogs as $blog)

			<a href="/blog/{{$blog->category->link_name}}/{{$blog->link_name}}/{{$blog->id}}.html">
			<div class="media">
				<div class="media-left">
					<img src="img/{{$blog->img}}" class="media-object" style="width:250px; height:160px ">
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{$blog->title}}</h4>
					<p>{{str_limit($blog->short,150)}}</p>
					<span class="category-tag">{{$blog->category->name}}</span>
				</div>
			</div>
			</a>

			@endforeach
			
		</div>

		{{$blogs->links()}}
	</div>
	<!--/Newest List-->

<!--/Left Bar-->

@endsection

