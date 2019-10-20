<!--Footer-->
<footer id="footer">
<div class="container">
	<div class="row">

		<!--Category Foot-->
		<div class="col-sm-12">
			<div class="foot-category-wrap">
				@foreach($categories as $category)
				<a href="/category/{{$category->link_name}}/{{$category->id}}.html">{{$category->name}}</a>
				@endforeach
						
			</div>	
		</div>	
		<!--/Category Foot-->

		<hr>

		<!--Brand-->
		<div class="col-sm-12">
			<div class="foot-brand">
				
				QBlog | Designed By Trần Quang | COPYRIGHT © 2017 ALL RIGHTS RESERVED<br>

				<!--DMCA-->
				<a href="http://www.dmca.com/Protection/Status.aspx?ID=a08a412a-c816-4e6d-863e-b9ee0d4058bf" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w250-5x1-07.png?ID=a08a412a-c816-4e6d-863e-b9ee0d4058bf" alt="DMCA.com Protection Status"></a> <script src="js/DMCABadgeHelper.min.js"> </script>
				<!--DMCA-->

			</div>
		</div>
		<!--/Brand-->

		<!--Info-->
		

			<div class="info-item info-phone">
				<div class="info-icon">
					<i class="fa fa-phone "></i>	
				</div>
				<div class="info-content">
					{{$phone->content}}
				</div>
				
			</div>	


		
			<div class="info-item info-email">
				<div class="info-icon">
					<i class="fa fa-envelope"></i>	
				</div>
				<div class="info-content">
					{{$email->content}}
				</div>
				
			</div>

			<div id="goTop" class="info-item info-gotop">
				<div class="info-icon">
					<i class="fa fa-angle-double-up"></i>	
				</div>
				
			</div>
	
		<!--/Info-->

		
	</div>
</div>	
</footer>

<script type="text/javascript">
	$(function(){  
	$(window).scroll(function () {
	if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
	else $('#goTop').fadeOut();
	});
	$('#goTop').click(function () {
	$('body,html').animate({scrollTop: 0}, 'slow');
	});
	});
</script>

<!--/Footer-->

