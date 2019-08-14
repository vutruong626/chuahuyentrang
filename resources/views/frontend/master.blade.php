<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>365 Days Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="365 Days" />
    <meta name="keywords" content="365 Days" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/dl-menu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/weather.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/venobox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/library.css')}}" />
    
    <!-- favicon links -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vt-custom.css')}}" />
    <link rel="shortcut icon" type="image/png" href="{{asset('images/header/favicon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('icon-fontawesome-vt/css/all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('icon-fontawesome-vt/js/all.js')}}" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <!-- menu cut -->
    @include('frontend.main-page.menu')
    <!-- menu cut -->
    
    @yield('content')
    <!-- prs patner slider End -->
    @include('frontend.main-page.footer')
    <!--footer news End-->
    <script src="{{asset('js/jquery_min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery.dlmenu.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/bit_timer.js')}}"></script>
    <script src="{{asset('js/venobox.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/weather.js')}}"></script>
    <script src="{{asset('js/custom_II.js')}}"></script>
    <!-- <script src="{{asset('js/jquery-1.9.1.min.js')}}"></script> -->
    <!--main js file end-->
</body>
</html>