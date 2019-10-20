<!--Right Bar-->
            
                <!--Most view blog-->
                <div class="row">
                    <div class="title-group">
                        Bài viết xem nhiều
                    </div>

                    <div class="list-blog">

                    @foreach($pops as $blog)
                        <a href="/blog/{{$blog->category->link_name}}/{{$blog->link_name}}/{{$blog->id}}.html"><i class="fa fa-angle-right fa"></i> {{$blog->title}}</a>
                    @endforeach    
                       
                        
                    </div>
                </div>
                <!--/Most view blog-->

                <!--New comments-->
                <div class="row">
                    <div class="title-group">
                        Bình luận mới nhất
                    </div>

                    <ul class="list-comment list-unstyled">

                    @foreach($new_comms as $comm)
                        <li>
                        {{$comm->user->name}}: "{{$comm->content}}" trong <a href="/blog/{{$comm->blog->category->link_name}}/{{$comm->blog->link_name}}/{{$comm->blog->id}}.html">{{$comm->blog->title}}</a>
                        </li>
                    @endforeach    
                       
                        
                    </ul>
                </div>
                <!--/New comments-->


                <!--Fanpage-->
                <div class="row">
                    <div class="title-group">
                        Theo dõi chúng tôi
                    </div>
                    <div class="fb-page" 
                      data-href="https://www.facebook.com/Qblog-657620594429250/"
                      data-width="400" 
                      data-hide-cover="false"
                      data-show-facepile="false" 
                      data-show-posts="false"></div>
                </div>
                <!--/Fanpage-->

                <div class="row">
                    <div class="title-group">
                        Tags
                    </div>
                    
                    <div class="tag-wrap">    
                        {!!$tags!!}
                    </div>    
                    
                </div>

                <!--Report-->
                <div class="row">
                    <div class="title-group">
                        Đánh giá giao diện
                    </div>
                    <div class="report-wrap">
                        <div class="radio">
                            <label><input value="3" type="radio" name="report"> Tuyệt vời <i class="fa fa-fw fa-smile-o"></i></label>
                        </div>

                        <div class="radio">
                            <label><input value="2" type="radio" name="report"> Bình thường <i class="fa fa-fw fa-meh-o"></i></label>
                        </div>

                        <div class="radio">
                            <label><input value="1" type="radio" name="report"> Dở tệ <i class="fa fa-fw fa-frown-o"></i></label>
                        </div>

                        <button id="post-report" class="btn btn-default">Gửi</button>
                    </div>
                </div>
                <!--/REport-->
<!--/Right Bar-->

<script type="text/javascript">
    $('#post-report').click(function(){
        var report = $('input[name=report]:checked').val();

        $('.report-wrap').html("<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw'></i><span class='sr-only'>Loading...</span>");

        $.get('/ajax/report/'+report,function(result){
            $('.report-wrap').html(result);
        })
    });
</script>