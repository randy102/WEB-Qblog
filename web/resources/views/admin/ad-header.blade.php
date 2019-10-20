<!--Header-->
<nav class="navbar navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        	<span class="icon-bar glyphicon glyphicon-menu-hamburger"></span>
        </button>
		<a href="/admin" class="navbar-brand">Qblog Admin</a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	       		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}<span class="caret"></span></a>
	          	<ul class="dropdown-menu">
		            <li><a href="/logout">
			            <i class="fa fa-sign-out"></i>
			            Đăng xuất
			            </a></li>

		            <li><a href="/">
		            	<i class="fa fa-home"></i>
		            	Về trang chủ
		            </a></li>

		            <li><a href="#" id="changePass">
		            	<i class="fa fa-cog"></i>
		           		Đổi mật khẩu
		            </a></li>
	         	</ul>
	        </li>
	     	
	    </ul>
    </div>
</nav>
<!--/Header-->

<script type="text/javascript">
	var id = "{{Auth::user()->id}}";
	$('#changePass').click(function(){
		$.get('ajax/admin/memberEdit/'+id,function(data){
			$('.content').html(data);
		});
		return false;
	});
</script>
