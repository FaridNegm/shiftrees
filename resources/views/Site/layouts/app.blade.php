<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        @yield('title')
    </title>
	<link rel="icon" type="image/png" href="{{ url('Site') }}/images/icons/favicon.png" />

    @if(Config::get('app.locale') == 'en')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/main.css">
        <link type="text/css" rel="stylesheet" href="{{ url('Site') }}/assets/css/style.css">
    @endif
    @if(Config::get('app.locale') == 'ar')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/vendor/bootstrap/css/bootstrap_arabic.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{ url('Site') }}/css/main_arabic.css">
        <link type="text/css" rel="stylesheet" href="{{ url('Site') }}/assets/css/style_arabic.css">
    @endif

    @yield('header')
</head>
<body class="animsition">

    @include('Site/layouts/navbar')

    @yield('content')

    {{--  @if(Config('app.locale') == 'ar')
        @lang('app.home')
    @endif  --}}

    @include('Site/layouts/footer')


	<script src="{{ url('Site') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{ url('Site') }}/vendor/animsition/js/animsition.min.js"></script>
	<script src="{{ url('Site') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ url('Site') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ url('Site') }}/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{ url('Site') }}/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="{{ url('Site') }}/js/revo-custom.js"></script>
	<script src="{{ url('Site') }}/js/main.js"></script>
	<script src="{{ url('Site') }}/js/jquery.filterizr.js"></script>
    <script  src="{{ url('Site') }}/js/app.js"></script>

    @yield('footer')
</body>

</html>
