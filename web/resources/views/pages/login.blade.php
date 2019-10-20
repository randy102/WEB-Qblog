<!-- Modal -->
  
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đăng nhập</h4>
            </div>
            <div class="modal-body">
                <form action="/loginCheck" method="post" accept-charset="utf-8">
                    <input name="_token" type="hidden" value="{{{ csrf_token() }}}" >

                    <div class="alert-danger"></div> 

                    <div class="form-group">
                        <label><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" class="form-control" value="" name="email">  
                    </div> 

                    <div class="form-group">
                        <label><i class="fa fa-lock"></i> Mật khẩu</label>
                        <input type="password" class="form-control" value="" name="password">  
                    </div>
                    
                    <button class="btn" id="login">Đăng nhập</button> 
                    
                </form>
                
                <div class="or-login">
                    hoặc      
                </div>  
                <a href="/signup" class="btn signup-btn">Đăng ký</a>
            </div>

        </div>
        <!--End Modal content-->
    </div>
  
  <!--End Modal-->
  
