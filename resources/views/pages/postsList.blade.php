<x-layouts.master>
    @section('title', 'Wszyskie Posty - Gameend')

    <main class="mt-16 md:mt-24 container max-w-screen-xl flex flex-col justify-between mx-auto p-10 xl:p-0">
        <ul>

            @foreach ($posts as $post)
                
<li>{{$post->title}}</li>
                
            @endforeach
        </ul>
    </main>
</x-layouts.master>
