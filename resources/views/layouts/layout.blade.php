<?php
$action = Request::segment(1);
?>
<!DOCTYPE html>
<html class="no-js" lang="{{app()->getLocale()}}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dajwari</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/img/favicon.png') }}">
        <!-- all css here -->
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css') }}">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="{{asset('public/css/default.css') }}">
        <link rel="stylesheet" href="{{asset('public/css/nivo-slider.css') }}">
        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="{{asset('public/css/owl.carousel.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css') }}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/css/meanmenu.css') }}">
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="{{asset('public/css/jquery.fancybox.css') }}">
        <!-- animated css -->
        <link rel="stylesheet" href="{{asset('public/css/animate.css') }}">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('public/css/jquery-ui.min.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('public/style.css') }}">
        <link rel="stylesheet" href="{{asset('public/css/responsive.css') }}">
        <!-- modernizr js -->
        <script src="{{asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        @include('layouts.header')
        
            @yield('content')
        
        @include('layouts.footer')
        
        <!-- basic scripts -->

        <script src="{{asset('public/js/vendor/jquery-1.12.0.min.js') }}"></script>	
        <!-- bootstrap js -->
        <script src="{{asset('public/js/bootstrap.min.js') }}"></script>
        <!-- nivo slider -->
        <script src="{{asset('public/js/jquery.nivo.slider.pack.js') }}"></script>
        <!-- owl carousel js --> 
        <script src="{{asset('public/js/owl.carousel.min.js') }}"></script>
        <!-- mixitup js -->
        <script src="{{asset('public/js/jquery.mixitup.js') }}"></script>
        <!-- wow js -->
        <script src="{{asset('public/js/wow.min.js') }}"></script>
        <!-- jquery.counterup js -->
        <script src="{{asset('public/js/jquery.counterup.min.js') }}"></script>
        <script src="{{asset('public/js/waypoints-min.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/js/jquery.meanmenu.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/js/ajax-mail.js') }}"></script>
        <!-- jquery-ui js -->
        <script src="{{asset('public/js/jquery-ui.min.js') }}"></script>
        <!-- jquery.countdown js -->
        <script src="{{asset('public/js/jquery.countdown.min.js') }}"></script>
        <!-- elevateZoom js -->
        <script src="{{asset('public/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>      
        <!-- Magnific Popup core JS file -->
        <script src="{{asset('public/js/jquery.fancybox.pack.js') }}"></script>
        <!-- scrollUp js -->
        <script src="{{asset('public/js/jquery.scrollUp.js') }}"></script>
        <!-- plugins js -->
        <script src="{{asset('public/js/plugins.js') }}"></script>
		
		<script type="text/javascript" src="{{asset('public/lazy-master/jquery.lazy.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('public/lazy-master/jquery.lazy.plugins.min.js') }}"></script>
        <!-- main js -->
        <script src="{{asset('public/js/main.js') }}"></script>
		

    </body>
<script>
	$('.filterdata').on('change', function () {
		
		var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
        });
		
		if ($(this).is(":checked")) {
			alert('checked');
		} else {
			alert('not checked');
		}
		
	});
 
</script>
</html>