<div class="bar-wrap">
	<ul class="nav nav-stacked">
	    <li>
		    <a href="#" data-page="dashboard">
		    	<i class="fa fa-dashboard fa-fw"></i> Thống kê
		    </a>
		    
	    </li>

	    <li>
		    <a href="#" data-toggle="collapse">
		    	<i class="fa fa-user fa-fw"></i> Thành viên
		    </a>

		    <ul class="nav nav-second collapse" aria-expanded="false">

		    	<li>
			    	<a href="" data-page="memberList">
			    		<i class="fa fa-angle-right fa-fw"></i> Quản lý
			    	</a>
		    	</li>

		    	<li>
			    	<a href="" data-page="memberAdd">
			    		<i class="fa fa-angle-right fa-fw"></i> Thêm
			    	</a>
		    	</li>
		    </ul>
	    </li>
	    
	    <li>
		    <a href="#" data-toggle="collapse">
		    	<i class="fa fa-bars fa-fw"></i> Thể loại
		    </a>

		    <ul class="nav nav-second collapse" aria-expanded="false">

		    	<li>
			    	<a href="" data-page="categoryList">
			    		<i class="fa fa-angle-right fa-fw"></i> Quản lý
			    	</a>
		    	</li>

		    	<li>
			    	<a href="" data-page="categoryAdd">
			    		<i class="fa fa-angle-right fa-fw"></i> Thêm
			    	</a>
		    	</li>
		    </ul>
	    </li>

	    <li>
		    <a href="#" data-toggle="collapse">
		    	<i class="fa fa-pencil fa-fw"></i> Bài viết
		    </a>

		    <ul class="nav nav-second collapse" aria-expanded="false">
		    	<li>
			    	<a href="" data-page="blogList">
			    		<i class="fa fa-angle-right fa-fw"></i> Quản lý
			    	</a>
		    	</li>

		    	<li>
			    	<a href="" data-page="blogAdd">
			    		<i class="fa fa-angle-right fa-fw"></i> Thêm
			    	</a>
		    	</li>
		    </ul>
	    </li>

	    <li>
		    <a href="#" data-toggle="collapse">
		    	<i class="fa fa-commenting fa-fw"></i> Bình luận
		    </a>

		    <ul class="nav nav-second collapse" aria-expanded="false">
		    	<li>
			    	<a href="" data-page="commentList">
			    		<i class="fa fa-angle-right fa-fw"></i> Quản lý
			    	</a>
		    	</li>
		    </ul>
	    </li>

	    <li>
		    <a href="#" data-toggle="collapse">
		    	<i class="fa fa-cog fa-fw"></i> Quản lý nội dung
		    </a>

		    <ul class="nav nav-second collapse" aria-expanded="false">

		    	<li>
		    		<a href="" data-page="faq">
		    			<i class="fa fa-angle-right fa-fw"></i> FAQs
		    		</a>
		    	</li>

		    	<li>
		    		<a href="" data-page="intro">
		    			<i class="fa fa-angle-right fa-fw"></i> Giới thiệu
		    		</a>
		    	</li>

		    	<li>
			    	<a href="" data-page="author">
			    		<i class="fa fa-angle-right fa-fw"></i> Tác giả
			    	</a>
		    	</li>

		    	<li>
			    	<a href="" data-page="info">
			    		<i class="fa fa-angle-right fa-fw"></i> Thông tin liên lạc
			    	</a>
		    	</li>
		    	
		    </ul>

	    </li>
	    
	   
	</ul>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.bar-wrap a').click(function(){
			//Dispay second menu
			if($(this).next().hasClass('in'))
				$(this).next().removeClass('in');
			else
				$(this).next().addClass('in');
			
			//focus
			$('.bar-wrap a').removeClass('active');
			$(this).addClass('active');

			return false;
		});
	});
</script>