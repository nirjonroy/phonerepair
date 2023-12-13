<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title', 'Phone Repir')</title>
    <!-- Plugins CSS -->
    <link href="{{asset('frontend/css/plugins.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">
    @stack('css')
</head>
