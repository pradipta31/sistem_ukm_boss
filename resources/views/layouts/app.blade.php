<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('style/images/favicon.png')}}">
    <title>{{$title}}</title>
    <link href="{{asset('style/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('style/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('style/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
    @yield("css")
</head>
<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('admin/dashboard')}}">
                        <b>SISMABOSS {{auth::user()->name}}</b>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0"></ul>
                    <ul class="navbar-nav my-lg-0">
                        @include('layouts.notification')
                        @include('layouts.settings')
                    </ul>
                </div>
            </nav>
        </div>
        @include('layouts.navigation',['activeMenu' => $activeMenu])
        <div class="page-wrapper">
          @yield('content')
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="#">UKM BOSS</a></footer>
        </div>
    </div>
    <script src="{{asset('style/js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('style/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('style/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('style/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('style/js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{asset('style/js/lib/morris-chart/morris.js')}}"></script>
    <script src="{{asset('style/js/lib/morris-chart/dashboard1-init.js')}}"></script>
	  <script src="{{asset('style/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{asset('style/js/lib/calendar-2/semantic.ui.min.js')}}"></script>
    <script src="{{asset('style/js/lib/calendar-2/prism.min.js')}}"></script>
    <script src="{{asset('style/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('style/js/lib/calendar-2/pignose.init.js')}}"></script>
    <script src="{{asset('style/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('style/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <script src="{{asset('style/js/scripts.js')}}"></script>
    <script src="{{asset('style/js/custom.min.js')}}"></script>
    @stack("script")
</body>
</html>
