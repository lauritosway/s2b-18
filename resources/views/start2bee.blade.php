<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('assets/images/ico/favicon.ico') }}">

    <title>
        @section('title')
            Start2bee, Coworking &  Events en Barcelona
        @show
    </title>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
</head>
<body>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42428307-1', 'auto');
    ga('send', 'pageview');

  </script>
    @include('partials.nav')

    @yield('content')
        
    @include('partials.footer')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mousescroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.tooltipster.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    @yield('javascript')
    <script type="text/javascript">
    $(function(){
      $('#check_in').datetimepicker();
      $('#check_out').datetimepicker();
      $('.knowMore').tooltipster();
    });
    </script>
 

</body>
</html>