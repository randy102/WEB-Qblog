@foreach($items as $item)
<a href="/blog/{{$item->category->link_name}}/{{$item->link_name}}/{{$item->id}}.html">
	<div class="media">
		
		<div class="media-body">
			<h4 class="media-heading">{{$item->title}}</h4>
			<p>{{str_limit($item->short,100)}}...</p>
		</div>
	</div>
</a>
@endforeach