<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.3 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public/user/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/user/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/user/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/user/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/user/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('/public/user/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('/public/user/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    <div class="left-sidebar-pro">
       @include('user.layouts.include.sidebar')
    </div>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        @include('user.layouts.include.nav')

      <div style="margin-top: 100px">
       @yield('content')
      </div>

        {{-- @include('user.layouts.include.footer') --}}
    </div>

    <!-- jquery
		============================================ -->
    <script src="{{ asset('/public/user/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('/public/user/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('/public/user/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('/public/user/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('/public/user/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('/public/user/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('/public/user/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('/public/user/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('/public/user/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('/public/user/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('/public/user/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('/public/user/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('/public/user/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/public/user/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('/public/user/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('/public/user/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('/public/user/js/calendar/fullcalendar-active.js') }}"></script>
	<!-- float JS
		============================================ -->
    <script src="{{ asset('/public/user/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/public/user/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/public/user/js/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/public/user/js/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('/public/user/js/flot/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('/public/user/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('/public/user/js/flot/flot-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('/public/user/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('/public/user/js/main.js') }}"></script>
</body>

</html>