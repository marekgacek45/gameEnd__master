<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin - Gameend')</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    @vite([ 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <x-admin.dashboard>
        {{ $slot }}
    </x-admin.dashboard>


    <x-flashMsg />
</body>

</html>