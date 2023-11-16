<x-layouts.master>
    @section('title', 'gameEnd')
    @section('description', 'Wejdź do świata programowania i gier.')

    {{-- SLIDER --}}
    <header class=" max-w-screen-full mx-auto ">
        <x-slider />
    </header>
    <main>

        {{-- POSTS --}}
        <section class="max-w-screen-xl mx-auto mt-12 px-4">

            <div class="space-y-8 mb-12 text-center">
                <h2 class="text-3xl font-semibold font-pixel uppercase">Świeżutkie posty</h2>
                <div class="sm:grid md:grid-cols-2 lg:grid-cols-4 mt-8 gap-12">
                    @foreach ($posts as $post)
                
                        <x-posts.postCard :post="$post" />
                
                    @endforeach
                </div>
            </div>

            <hr class="border ">
            <div class="mt-6 flex justify-center items-center ">
                <x-buttons.primary type="button"><a href="{{ route('posts') }}">Zobacz wszystkie
                        posty</a></x-buttons.primary>
            </div>


        </section>

        {{-- VIDEO --}}
        <section class="max-w-screen-xl mx-auto mt-12">
            <div class="space-y-8 mb-12 text-center">
                <h2 class="text-3xl font-semibold font-pixel uppercase">Najnowsze filmy</h2>
                <div class="sm:grid md:grid-cols-2 lg:grid-cols-4 mt-8 gap-12">
                @foreach ($videos as $video)
                   <x-videos.videoCard :video="$video"/>
                @endforeach
                </div>
                <hr class="border ">
                <div class="mt-6 flex justify-center items-center ">
                    <x-buttons.primary type="button "><a href="https://www.youtube.com/@gameendTop" target="_blank">Zobacz na YouTube</a></x-buttons.primary>
                </div>
            </div>
        </section>
    </main>

</x-layouts.master>
