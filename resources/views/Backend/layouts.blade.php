<!DOCTYPE html>
<html lang="en">


@include('backend.partials.head')

<body>
    @include('backend.partials.header')

    @yield('content')

    @include('backend.partials.footer')
    @include('sweetalert::alert')

