<!DOCTYPE <html>
<head>
	<title>This is my Blog!</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	  <!-- jQuery library (served from Google) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="/js/jquery.bxslider.js"></script>
	<!-- bxSlider CSS file -->
	<link href="/css/jquery.bxslider.css" rel="stylesheet" />
	{{-- ...... --}}
	  <meta charset="UTF-8" />
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

    
	@yield('top-script')
</head>
<body>
	@yield('content')
	{{-- put navbar above the session stuff below. --}}
	@if (Session::has('successMessage'))
    	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

</body>
</html>