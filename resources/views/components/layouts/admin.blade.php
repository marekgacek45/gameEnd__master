<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin - Gameend')</title>
    @vite([ 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-darkBlue text-white">
    <x-admin.sidebar>
        {{ $slot }}
    </x-admin.sidebar>


    <x-flashMsg />
</body>

</html>
