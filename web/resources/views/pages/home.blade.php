@extends('pages.master')

@section('des')
Đây là một trang Blog chia sẻ mọi thứ từ tài liệu lập trình đến những câu chuyện triết lý sâu sắc hay những trải nghiệm của tác giả trong cuộc sống hằng ngày. 
@endsection

@section('title')
Qblog | Chia sẻ và học tập
@endsection

@section('keywords')
Từ khóa
@endsection

@section('content')

<!--Left Bar-->

	<!--Slider-->
	<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
		  	<!-- Indicators -->
			<ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?php $slide_num = 0; ?>
				@foreach($slides as $slide)

			  	<div class="item @if($slide_num == 0) {{"active"}} @endif">
			      	<img src="img/{{$slide->img}}" alt="{{$slide->title}}">
			      	<a href="/blog/{{$slide->category->link_name}}/{{$slide->link_name}}/{{$slide->id}}.html">
				      	<div class="carousel-caption">
					        <h3>{{$slide->title}}</h3>
					        <p>{{str_limit($slide->short,180)}}</p>
					    </div>
				    </a>
			    </div>
				<?php $slide_num++; ?>
			   @endforeach

				 <!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				   	<i class="fa fa-chevron-left"></i>
				    <span class="sr-only">Previous</span>
				  </a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <i class="fa fa-chevron-right"></i>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!--/Slider-->

	<hr>

	<!--Newest List-->
	<div class="row">
		<div class="title-group">
			Bài viết nổi bật
		</div>

		<div class="newest-wrap">
			@foreach($highlights as $blog)

			<a href="/blog/{{$blog->category->link_name}}/{{$blog->link_name}}/{{$blog->id}}.html">
			<div class="media">
				<div class="media-left">
					<img src="img/{{$blog->img}}" class="media-object">
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{$blog->title}}</h4>
					<p>{{str_limit($blog->short,180)}}...</p>
					<span class="category-tag">{{$blog->category->name}}</span>
				</div>
			</div>
			</a>

			@endforeach

		</div>
		
	</div>
	<!--/Newest List-->

	<!--Random List-->
	<div class="row">
		<div class="title-group">
			Hôm nay xem gì
		</div>

		<div class="newest-wrap">
			@foreach($random as $blog)

			<a href="/blog/{{$blog->category->link_name}}/{{$blog->link_name}}/{{$blog->id}}.html">
			<div class="media">
				<div class="media-left">
					<img src="img/{{$blog->img}}" class="media-object">
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{$blog->title}}</h4>
					<p>{{str_limit($blog->short,180)}}...</p>
					<span class="category-tag">{{$blog->category->name}}</span>
				</div>
			</div>
			</a>

			@endforeach

		</div>
		
	</div>
	<!--/Random List-->

	<!--Newest List-->
	<div class="row">
		<div class="title-group">
			Mới ra lò
		</div>

		<div class="newest-wrap">
			@foreach($newests as $blog)

			<a href="/blog/{{$blog->category->link_name}}/{{$blog->link_name}}/{{$blog->id}}.html">
			<div class="media">
				<div class="media-left">
					<img src="img/{{$blog->img}}" class="media-object">
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{$blog->title}}</h4>
					<p>{{str_limit($blog->short,180)}}...</p>
					<span class="category-tag">{{$blog->category->name}}</span>
				</div>
			</div>
			</a>

			@endforeach

		</div>
		
	</div>
	<!--/Newest List-->



<!--/Left Bar-->


@endsection