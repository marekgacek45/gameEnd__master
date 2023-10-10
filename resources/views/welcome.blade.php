<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>

<body>
    <h1 class="text-red-600">test</h1>

    @foreach ($posts as $post)
        <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
        <p>{!! $post->content !!}</p>
    @endforeach
</body>

</html>
