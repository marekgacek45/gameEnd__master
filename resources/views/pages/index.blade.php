<x-layouts.master>
    @section('title', 'gameEnd')
    @section('description', 'Wejdź do świata programowania i gier.')

    {{-- SLIDER --}}
    <header class=" max-w-screen-2xl mx-auto ">
        <x-slider />
    </header>
    <main>

        {{-- POSTS --}}
        <section class="max-w-screen-xl mx-auto mt-12">

            <div class="space-y-8 mb-12">
                <h2 class="text-3xl font-semibold">Najnowsze posty</h2>
                <x-posts.latestPosts :newestPost='$newestPost' :latestPosts="$latestPosts" />
            </div>

            <hr class="border ">
            <div class="mt-6 flex justify-center items-center ">
                <x-buttons.primary type="button" ><a href="{{route("posts")}}">Zobacz wszystkie posty</a></x-buttons.primary>
            </div>
        </section>

        {{-- VIDEO --}}
        <section class="max-w-screen-xl mx-auto mt-12">
            <div class="space-y-8 mb-12">
                <h2 class="text-3xl font-semibold">Najnowsze filmy</h2>
                @foreach ($videos as $video)
                    <div class="p-4 sm:p-8 md:p-0  border border-black rounded-md transition-shadow ">

                        <a href="{{ $video->link }}" class="flex flex-col justify-center items-center">
                            <img src="{{ asset('storage/' . $video->thumbnail) }}"
                                alt="miniaturka filmu {{ $video->title }}"
                                class="min-h-[250px] md:min-h-[200px] max-h-[250px] md:max-h-[200px] object-cover w-full"
                                loading="lazy">

                            <h2 class="text-xl font-semibold py-3">{{ $video->title }}</h2>
                        </a>
                    </div>
                @endforeach
                <hr class="border ">
                <div class="mt-6 flex justify-center items-center ">
                    <x-buttons.primary type="button">Zobacz wszystkie filmy</x-buttons.primary>
                </div>
            </div>
        </section>
    </main>

</x-layouts.master>
