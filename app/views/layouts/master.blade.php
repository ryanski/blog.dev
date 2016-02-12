<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	
	{{-- link rel="stylesheet" href="/css/bootstrap.min.css">
	script src="/js/jquery-1.11.3.min.js"></script>
	script src="/js/bootstrap.js"></script> --}}
	  <!-- jQuery library (served from Google) -->
	{{-- script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script --}}
	<!-- bxSlider Javascript file -->
	{{-- script src="/js/jquery.bxslider.js"></script --}}
	<!-- bxSlider CSS file -->
	{{-- <link href="/css/jquery.bxslider.css" rel="stylesheet" /> --}}
	{{-- ...... --}}
	{{--   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link type="text/css" media="all" href="http://www.andreamann.com/wp-content/cache/autoptimize/css/autoptimize_55b85feab51e36543071ddfa33d1dce2.css" rel="stylesheet" />
    <link type="text/css" media="screen" href="http://www.andreamann.com/wp-content/cache/autoptimize/css/autoptimize_a06aaa23cf8af84047e93da978516154.css" rel="stylesheet" />
    <title>Thuglife</title>
    <link rel='stylesheet' id='sb_instagram_icons-css' href='//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css?1&#038;ver=4.2.0' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='http://www.andreamann.com/wp-includes/css/dashicons.min.css?ver=4.4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css' href='//fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%7CMontserrat&#038;ver=1.0' type='text/css' media='all' />
    <link rel="Shortcut Icon" href="http://www.andreamann.com/wp-content/themes/modern-studio-pro/images/favicon.ico" type="image/x-icon" />

  <script type='text/javascript' src='http://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201602'></script>
    <script type='text/javascript' src='http://s.gravatar.com/js/gprofiles.js?ver=2016Janaa'></script>
    <script type='text/javascript' src='http://stats.wp.com/e-201602.js' async defer></script>
    <script type="text/javascript" defer src="http://www.andreamann.com/wp-content/cache/autoptimize/js/autoptimize_3d95e3b5516b24754bdcdb9e2fbba156.js"></script>
 --}}


<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->  <!--<![endif]-->
   
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="coding, traveling, adventures, blogging, bartending, cultures, creativity, entrepreneur, fullstack developer">
        <!-- meta character set -->
        <meta charset="utf-8">

      	<title>This is my Blog!</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="css/responsive.css">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    
	@yield('top-script')
</head>
<body>
	
        <!--
        Fixed Navigation
        ==================================== -->
       @include('partials.navbar')
        <!--
        End Fixed Navigation
        ==================================== -->

	{{-- put navbar above the session stuff below. --}}
	@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	@yield('content')

 <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        {{-- <div class="footer-logo wow fadeInDown">
                            <img src="img/logo.png" alt="logo">
                        </div> --}}

                       {{--  <div class="footer-social wow fadeInUp">
                            <h3>We are social</h3>
                            <ul class="text-center list-inline">
                                <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
 --}}
                        <div class="copyright">
                           
                            <p>Theme by <a href="http://graphberry.com">GraphBerry.com</a> Developed by <a target="_blank" href="http://www.themefisher.com">Themefisher</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.js"></script>
        <!-- jquery.nav -->
        <script src="js/jquery.nav.js"></script>
        <!-- Portfolio Filtering -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="js/main.js"></script>
        @yield('bottom-script')
    </body>
</html>