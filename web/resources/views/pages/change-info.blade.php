@extends('pages.master')

@section('des')

Thay đổi thông tin cá nhân

@endsection

@section('title')

Thay đổi thông tin cá nhân

@endsection

@section('content')

<!--Breadcrumb-->
<div class="row">
	<ol class="blog-breadcrumb">
		<li><a href="/">Trang chủ</a></li>
		<li class="active"><i class="fa fa-caret-right fa-fw"></i>Thay đổi thông tin cá nhân</li>
	</ol>	
</div>
<!--/Breadcrumb-->

<form style="width:500px" action="/doChangeInfo" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

	<div class="form-group">
		<label><i class="fa fa-user fa-fw"></i> Tên hiển thị</label>
		<input  class="form-control" type="text" name="name" value="{{$user->name}}" data-toggle="tooltip" title="Tên sẽ hiển thị khi trên những bình luận">
		<div class="error"></div>
	</div>

	<h3 class="page-header">Đổi mật khẩu</h3>

	<div class="form-group">
		<label><i class="fa fa-lock fa-fw"></i> Mật khẩu hiện tại</label>
		<input  class="form-control" type="password" name="password" value="">
		<div class="error"></div>

	</div>

	<div class="form-group">
		<label><i class="fa fa-lock fa-fw"></i> Mật khẩu mới</label>
		<input  class="form-control" type="password" name="changed_password" value="" data-toggle="tooltip" title="Có độ dài từ 6-20 ký tự">
		<div class="error"></div>

	</div>

	<div class="form-group">
		<label><i class="fa fa-refresh fa-fw"></i> Nhập lại mật khẩu</label>
		<input  class="form-control" type="password" name="repeat_password" value="" data-toggle="tooltip" title="Nhập lại mật khẩu">
		<div class="error"></div>

	</div>
	
	<button class="btn btn-info" id="update">Cập nhật</button>
	
</form>

<hr>

{!!Session::get('message')!!}

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({ placement: "right", animation: "true"}); 

    //Validate

    var error = false;

    //Validatte Name
    $('[name="name"]').keyup(function(){
    	var old_name = "{{$user->name}}";

    	var new_name = $(this).val();

    	if(new_name != old_name){
    		$.get('/ajax/nameCoincident/'+new_name,function(result){
    			$('[name="name"]').next().next().html(result);
    		});
    	}

    });

    $('[name="name"]').focusout(function(){ 
    	if($(this).val() == ""){  //if name is null

    		$(this).next().next().html("<div class='text-danger'>Bạn không được để trống!</div>");

    		error = true; //Have error
    	}
    	else{ //If name is not null
    		error = false; // Doesn't have error
    		$(this).next().next().html("");
    	}
    });

    //End Validate Name

    //Validate password

    //Check password
    $('[name="password"]').keyup(function(){
    	var password = $(this).val();

    	$.get('/ajax/passwordCoincident/'+password,function(result){
    		if(result == "true"){
    			$('[name="password"]').next().html("<div class='text-success'>Mật khẩu đúng!</div>");
    			error = false;
    		}	
    		else{
    			$('[name="password"]').next().html("<div class='text-danger'>Mật khẩu sai!</div>");
    			error = true;
    		}
    	});
    	

    });

    $('[name="changed_password"]').focusout(function(){ 
    	if($('[name="password"]').val() == ""){  //if name is null

    		$('[name="password"]').next().html("<div class='text-danger'>Bạn chưa nhập mật khẩu hiện tại!</div>");

    		error = true; //Have error
    	}
    	else{ //If name is not null
    		error = false; // Doesn't have error
    		$('[name="password"]').next().html("");
    	}
    });

    //Check new password
    $('[name="changed_password"]').keyup(function(){ 

    	var password = $(this).val();

    	if(password.length < 6){
    		$(this).next().next().html("<div class='text-danger'>Mật khẩu quá ngắn</div>");

    		error = true;
    	}
    	else{
    		$(this).next().next().html("<div class='text-success'>Mật khẩu hợp lệ!</div>");

    		error = false;
    	}
    	
    });

    //Checck repeat password
    $('[name="repeat_password"]').keyup(function(){ 
    	var origin = $('[name="changed_password"]').val();

    	var repeat = $(this).val();

    	if(repeat != origin){
    		$(this).next().next().html("<div class='text-danger'>Mật khẩu không khớp</div>");

    		error = true;
    	}
    	else{
    		$(this).next().next().html("<div class='text-success'>Mật khẩu đã khớp</div>");

    		error = false;
    	}
    	
    });
    // EndValidate password 

    //Check Error
    $('#update').click(function(){
    	if(error == true){
    		alert('Đã xảy ra lỗi!');
    		return false;
    	}
    });
    //End Check Error

    //End Validate
});
</script>

@endsection