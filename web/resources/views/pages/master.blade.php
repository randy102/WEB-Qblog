<!doctype html>
<html lang="vi">
    <head>
        <meta name="google-site-verification" content="3hQ8957iymR5EIBhJKYjqgpeDpW2eQKl6QOluOrh_kg" />
        <meta charset="utf-8">
        <meta name="description" content="@yield('des')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Title-->
        <title>
            @yield('title')
        </title>
        <!--/Title-->
        <base href="{{asset('')}}"> 
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">

        <link rel="stylesheet/less" type="text/css" href="css/index.less?v=1.17" /> 
        <link rel="stylesheet/less" type="text/css" href="css/blog.less?v=1.6" />   

        <!--/CSS-->

        <!--Favicon-->
        <link rel="shortcut icon" type="text/css" href="favi.ico">
        <!--Favicon-->

        <!--Scrip-->

        <script src="js/less.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

        <script type="text/javascript" src="js/bootstrap.js"></script>

        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "ur-d207247d-f4a3-e98e-1da2-57aaba9d6ddf"});</script>

        @yield('script')

        <!--/Scrip-->

        <!--Adsense-->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2895106928953600",
    enable_page_level_ads: true
  });
</script>
        <!--/Adsense-->
        
    </head>
    <body>

        <!--Fanpage Plugin-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!--Fanpage Plugin--> 

        <!--Header-->
        @include('pages.header')
        <!--Header-->

        <!--Content-->
        <div class="container main-content">
            <!--Left Bar-->
            <div class="col-sm-8">
                @yield('content')
            </div>
                
            <!--/Left Bar-->

            <!--Right Bar-->
            <div class="col-sm-4 " style="padding-left:30px">
                @include('pages.rightbar')
            </div>    
            <!--/Right Bar-->
            
        </div>
        <!--/Content-->



        <!--Footer-->
        @include('pages.footer')
        <!--Footer-->

        
    </body>
</html>




