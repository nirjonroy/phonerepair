<!doctype html>
<html>

@include('frontend.partials.head')

<body>
    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
