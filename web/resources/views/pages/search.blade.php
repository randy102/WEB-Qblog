@extends('pages.master')

@section('des')

Tìm kiếm {{$keyword}}

@endsection

@section('title')

Tìm kiếm {{$keyword}}

@endsection

@section('content')

<!--Left Bar-->

	<!--Category List-->
	<div class="row">
		<div class="title-group">
			Tìm kiếm {{$keyword}}
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

