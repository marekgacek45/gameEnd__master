<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Gameend')</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    
</head>
<body class="bg-white text-black flex flex-col justify-between h-screen">
    
    <x-nav.navBar/>
    {{ $slot }}
   
    <x-footer/>
    <x-flashMsg/>
</body>

</html>