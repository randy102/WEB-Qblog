<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đăng ký</title>
    

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">

        <link rel="shortcut icon" type="text/css" href="favi.ico">
        <link rel="stylesheet/less" type="text/css" href="css/index.less" />

        <script src="js/less.min.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script> 
        
    </head>
    <body>
        
        <!-- Modal -->
 
    
            <div class="signup-wrap">
                <div class="signup-title">
                    Đăng ký
                </div>
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}} <br>
                    @endforeach
                </div>
                @endif

                @if(session('signup'))
                    <div class="alert alert-success">Đăng ký thành công! Về <a href="/">trang chủ</a> để đăng nhập</div>
                @endif
                <form action="/signupCheck" method="post" accept-charset="utf-8">
                    <input name="_token" type="hidden" value="{{{ csrf_token() }}}" >

                    <div class="alert-danger"></div>

                    <div class="alert-success"></div>

                    <div class="form-group">
                        <label><i class="fa fa-user"></i> Tên hiển thị</label>
                        <input type="text" class="form-control" name="name" data-toggle="tooltip" title="Tên sẽ hiển thị khi trên những bình luận">  
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" name="email" data-toggle="tooltip" title="Cách chúng tôi liên lạc bạn">  
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-lock"></i> Mật khẩu</label>
                        <input type="password" class="form-control" name="password" data-toggle="tooltip" title="Từ 6 đến 20 ký tự">  
                    </div>
                    <div class="form-group">
                        <label><i class="fa fa-lock"></i> Nhập lại Mật khẩu</label>
                        <input type="password" class="form-control" name="re_password"data-toggle="tooltip" title="Nhập lại mật khẩu">  
                    </div>
                    
                    <button class="btn">Đăng ký</button>
                    <a href="/" class="btn">Trang chủ</a>
                </form>

               
                 
            </div>

        
    </body>
</html>

  
