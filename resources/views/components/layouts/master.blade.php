<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Gameend')</title>
    <meta name="description" content='@yield('description')'>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicons/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property=”og:url” content=”https://gameend.pl” />
    <meta property="og:type" content="website" />
    <meta property=”og:title” content='@yield('title')' />
    <meta property="og:description" content='@yield('description')' />
    <meta property="og:image" content='{{ asset('assets/logo/logo.webp') }}' />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="bg-black text-white flex flex-col justify-between h-screen">

    <x-nav.navBar />
    {{ $slot }}

    <x-footer />
    <x-flashMsg />
</body>

</html>
