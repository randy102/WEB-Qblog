<!--Backlink-->
<div class="head-link">
    <a href="http://etrans.hol.es" target="_blank">Effortless English</a>
    <a href="https://www.facebook.com/Qblog-Chia-sẻ-và-học-tập-657620594429250/" target="_blank">Fanpage</a>
    <a href="https://www.youtube.com/channel/UC3WKitZ-QSPuJ_cvYSGy1Ow/feed?view_as=subscriber" target="_blank">Youtube Chanel</a>
</div>
<!--Backlink-->

<div class="container">
    <div class="header-wall">
        <img src="img/Q-blog-wall.png" alt="">
        <!--Search-->
        <form method="get" action="/search">
            <input name="_token" type="hidden" value="{{{ csrf_token() }}}" >
            
            <input class="form-control menu-search" type="text" name="search" placeholder="Search..." value="">
            <span class="glyphicon glyphicon-search"></span>
            
        </form>
        <div class="quick-search-wrap"></div>

        <!--/Search-->
    </div>
</div>


<header id="header" class="navbar">
    

	<div class="navbar-collapse menu-wrap">

		<ul class="nav navbar-nav">
            <li><a href="">Trang chủ</a></li>
            <li><a href="/introduction">Giới thiệu</a></li>
            <li><a href="/cau-hoi-thuong-gap">FAQ</a></li>

		    <li><a data-level="1">Thể loại</a>
		    	<div data-level="2" class="level-menu category-menu-wrap">

		    		<div class="category-item">

                        <span class="arrow-up"></span>

		    			@foreach($categories as $category)
		    			<a href="/category/{{$category->link_name}}/{{$category->id}}.html">{{$category->name}}</a>
		    			@endforeach
		    		</div>
		    		
		    	</div>
		    </li>
		    
		    
		</ul>

		<div class="navbar-right">
			@if(Auth::check())
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				       		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i>{{Auth::user()->name}}<span class="caret"></span></a>
				          	<ul class="dropdown-menu">
					            <li><a href="/logout">
						            <i class="fa fa-sign-out"></i>
						            Đăng xuất
						            </a></li>

					            <li><a href="/change_user_info">
					            	<i class="fa fa-cog"></i>
					           		Thay đổi thông tin
					            </a></li>

					            @if(Auth::user()->level == 1)
					            <li><a href="/admin">
					            	<i class="fa fa-user"></i>
					           		Control Panel
					            </a></li>

					            @endif
				         	</ul>
				        </li>
				     	
				    </ul>
			    </div>
			@else

				<a class="btn btn-login" data-toggle="modal" data-target="#myModal">Đăng nhập</a>
				<div class="modal fade" id="myModal" role="dialog">
					@include('pages.login')
				</div>

			@endif
		</div>
	</div>

    <a class="res-icon">&#9776;</a>
</header>

<script type="text/javascript">

    $(document).ready(function(){ 


        //Quick search
        $('.menu-search').keyup(function(){
        	var search = $(this).val();
            $('.quick-search-wrap').show();
           	$.get('ajax/quickSearch/'+search,function(result){
           		$('.quick-search-wrap').html(result);
           	});
        });

        $('.quick-search-wrap').mouseout(function(){
            
            $('.quick-search-wrap').hide();
        
        });

        
            
            
      
        //End Quick search

        //Responsive
        var width = $(window).width();
        console.log(width);
        
        if(width <= 768){
        	$('.media-left').addClass('media-left-res');
        	$('.media-left').removeClass('media-left');

            $('div[data-level="2"]').removeClass('level-menu');

                $('a[data-level="1"]').click(function(){
                    if($('div[data-level="2"]').hasClass('visible')){
                        $('div[data-level="2"]').removeClass('visible');
                    }
                    else{
                        $("div[data-level='2']").addClass('visible');
                    }
                });
        }
        
        $(window).resize(function(){
        	var width = $(window).width();
        		

        	if(width <= 768){
        		$('.media-left').addClass('media-left-res');
        		$('.media-left').removeClass('media-left');
                $('#header ul li a').css('display','none');
                $('.btn-login').css('display','none');
                $('div[data-level="2"]').removeClass('level-menu');

                $('a[data-level="1"]').click(function(){
                    if($('div[data-level="2"]').hasClass('visible')){
                        $('div[data-level="2"]').removeClass('visible');
                    }
                    else{
                        $("div[data-level='2']").addClass('visible');
                    }
                });
       		}
       		else{
       			$('.media-left-res').addClass('media-left');
        		$('.media-left').removeClass('media-left-res');
                $('#header ul li a').css('display','block');
                $('.btn-login').css('display','block');
                $('div[data-level="2"]').addClass('level-menu');
       		}
        });

        var res_check = 0;
        if(width <=768){
            $('.res-icon').click(function(){

                if(res_check%2 == 0){
                    $('#header ul li a').css('display','block');
                    $('.btn-login').css('display','block');
                }
                else{
                    $('#header ul li a').css('display','none');
                    $('.btn-login').css('display','none');
                }
                
                res_check++;
                console.log(res_check);
            });
        }
        else{
            $('#header ul li a').css('display','block');
            $('.btn-login').css('display','block');
        }    
       
        //End Responsive

        //Login Check
        var login = "{{ Session::get('login') }}";

        
        if(login == "fail"){
        	$('.alert-danger').html("<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><i class='fa fa-times-circle'></i> Tài khoản hoặc mật khẩu không đúng");

        	$('.alert-danger').addClass('alert');
        	$('#myModal').modal('show');

        	{{Session::forget('login')}}
        }
        //End Login Check

        
        
        
    });
</script>
