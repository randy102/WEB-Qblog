<!doctype html>
<html>
    <head>
        <title>Quản trị trang web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!--CSS-->
        <base href="{{asset('')}}"> 
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <link rel="stylesheet/less" type="text/css" href="css/admin.less?v=1.10">
       
        <!--/CSS-->

        <!--Favicon-->
        <link rel="shortcut icon" type="text/css" href="favi.ico">
        <!--/Favicon-->

        <!--Scrip-->
        <script type="text/javascript" src="js/app.js"></script>

        <script type="text/javascript" src="js/less.min.js" ></script>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>


        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        

        <!--Chart Plugin-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
        
        <!--/Chart Plugin-->

        <!--/Scrip-->

        <!--Data Table-->

        <!-- DataTables CSS -->
        <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">


        <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	       
        <!--/Data Table-->  

    </head>
    <body>
        <!--Header-->
        @include('admin.ad-header')
        <!--Header-->

        <!--Left Bar-->
        @include('admin.ad-bar')
        <!--/Left Bar-->

        <!--Content-->
        <div class="admin-content-wrap">
            <div class="container-fluid">
                <div class="content">
                    
                </div>
            </div>
        </div>
        <!--/Content-->

        <!--Loading-->
        <div class="loader"></div>
        <!--/Loading-->

        <script type="text/javascript">
            $(document).ready(function(){
                //First Load
                var f_page = "{{$page or 'dashboard'}}";

                $.get('ajax/admin/'+f_page,function(data){
                    $('.content').html(data);
                    $('.content').show();
                    $('.loader').hide();
                });

                
                //Bar click   
                $('.bar-wrap a').click(function(){

                    var page = $(this).attr('data-page');

                    if(typeof page != "undefined"){
                        
                        $('.content').hide();
                        $('.loader').show();
                        $.get('ajax/admin/'+page,function(data){
                            $('.content').html(data);
                            $('.content').show();
                            $('.loader').hide();
                        });
                    }

                    return false;
                });

                //Page click
                $(document).on('click','.btn',function(){
                    var page = $(this).attr('data-page');
                    var id = $(this).attr('data-id');
                    
                    if(typeof page != "undefined"){
                        $('.content').hide();
                        $('.loader').show();

                        $.get('ajax/admin/'+page+'/'+id,function(data){
                            $('.content').html(data);
                            $('.content').show();
                            $('.loader').hide();
                        });
                    }
                    
                });

                //Link Click
                $(document).on('click','.panel a',function(){
                    var page = $(this).attr('href');
                    
                    if(typeof page != "undefined"){
                        $('.content').hide();
                        $('.loader').show();

                        $.get('ajax/admin/'+page,function(data){
                            $('.content').html(data);
                            $('.content').show();
                            $('.loader').hide();
                        });
                    }
                    return false;
                });

                
                
              
            });
            
        </script>

    </body>
</html>