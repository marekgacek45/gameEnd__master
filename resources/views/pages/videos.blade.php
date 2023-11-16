<x-layouts.master>
    @section('title', 'Wszyskie Filmy - gameEnd')

    <main class="mt-16 md:mt-24 container max-w-screen-xl flex flex-col justify-between mx-auto p-10 xl:p-0 text-center">
        <h2 class="text-3xl font-semibold font-pixel uppercase">Najnowsze filmy</h2>
        <div class="sm:grid md:grid-cols-2 lg:grid-cols-4 mt-8 gap-12">
            @foreach ($videos as $video)
        
                <x-videos.videoCard :video="$video" />
        
            @endforeach
        </div>

    </main>
</x-layouts.master>