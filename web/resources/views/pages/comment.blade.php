	@foreach($comments as $comment)
	<div class="media comment-media">
		<div class="media-body">
			<h4 class="media-heading">{{$comment->user->name}}</h4>
			<div class="media-date">
				{{$comment->created_at}}
			</div>
			<p>
				{{$comment->content}}
			</p>
		</div>
	</div>
	@endforeach