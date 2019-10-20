@extends('pages.master')

@section('des')
{{str_limit($blog->short,150)}}
@endsection

@section('title')
{{$blog->title}}
@endsection

@section('keywords')
{{keyworded($blog->keywords)}}
@endsection

@section('content')


<!--Breadcrumb-->
<div class="row">
	<ol class="blog-breadcrumb">
		<li><a href="/">Trang chủ</a></li>
		<li><a href="/category/{{$blog->category->link_name}}/{{$blog->category->id}}.html"><i class="fa fa-caret-right fa-fw"></i>{{$blog->category->name}}</a></li>
		<li class="active"><i class="fa fa-caret-right fa-fw"></i>{{$blog->title}}</li>
	</ol>	
</div>
<!--Breadcrumb-->

<!--Blog Wrap-->
<div class="row">
	<div class="blog-wrap">

		<!--Date - Social-->
		<div class="date-social-wrap">
			
			<div class="date">
				{{$blog->created_at}}
			</div>

			<div class="social">
				
				<span class='st_sharethis_large' displayText='ShareThis'></span>
				<span class='st_facebook_large' displayText='Facebook'></span>
				<span class='st_twitter_large' displayText='Tweet'></span>
				<span class='st_linkedin_large' displayText='LinkedIn'></span>
				<span class='st_email_large' displayText='Email'></span>
				
			</div>
		
		</div>
		<!--/Date - Social-->

		<!--Blog Title-->
		<h1 class="blog-title">
			{{$blog->title}}
		</h1>
		<!--/Blog Title-->

		<!--Blog Short-->
		<div class="blog-short">
			{{$blog->short}}
		</div>
		<!--/Blog Short-->

		<!--Blog Img-->
		<div class="blog-img">
			<img src="img/{{$blog->img}}" alt="{{$blog->link_name}}">
		</div>
		<!--Blog Img-->

		<!--Blog Content-->
		<div class="blog-content">
			{!!$blog->content!!}

			<p>Cùng chủ đề:</p>
			<ul>
				@foreach($rec_blogs as $rec_blog)
			    <li><a href="/blog/{{$rec_blog->category->link_name}}/{{$rec_blog->link_name}}/{{$rec_blog->id}}.html">{{$rec_blog->title}}</a></li>
			    @endforeach
			</ul>
		</div>
		<!--/Blog Content-->

		<!--Author-->
		<div class="author">
			Theo {{$blog->author->name}}
		</div>
		<!--/Author-->

		<!--Tags-->
		<div class="blog-tag">
			Tags: {!!taged($blog->keywords)!!}
		</div>
		<!--/Tags-->

		<!--Comments-->
		<div class="comment-wrap">
			<div class="comment-title">
				Bình luận <i class="fa fa-commenting"></i>
			</div>
			@if(Auth::check())
			<div class="comment-inp-wrap">
				<div class="text-comment-wrap form-group">
					<textarea class="form-control"  name="content"></textarea>
				</div>	
				<button class="btn" id="post_comment" type="submit">Đăng</button>
			</div>
			@else
			<hr>
			<div class="text-center">Bạn phải đăng nhập để viết bình luận</div>
			<hr>
			@endif
			<div id="comments">
					
			</div>
				
			
		</div>
		<!--/Comments-->

	</div>
</div>
<!--/Blog Wrap-->
<script type="text/javascript">
	$(document).ready(function(){
		

		$.get('/ajax/comments/{{$blog->id}}',function(result){
			$('#comments').html(result);
			
		});

		$('#post_comment').click(function(){
			var content = $('textarea').attr('name','content').val();

			if(content == ''){
				alert('Bạn chưa nhập bình luận');
			}
			else{

				$('#comments').html("<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i><span class='sr-only'>Loading...</span>");
				$.get('/ajax/commentPost/'+content+'/{{$blog->id}}',function(result){
					$('textarea').attr('name','content').val('');
					$('#comments').html(result);
				});
			}
		});
	});
</script>


@endsection