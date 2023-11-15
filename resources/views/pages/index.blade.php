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
                    <div class="p-4 sm:p-8 md:p-0  border border-black rounded-md transition-shadow  overflow-hidden hover03">

                        <a href="{{ $video->link }}" class="flex flex-col justify-center items-center group">
                            <figure><img src="{{ asset('storage/' . $video->thumbnail) }}"
                                alt="miniaturka filmu {{ $video->title }}"
                                class="min-h-[250px] md:min-h-[200px] max-h-[250px] md:max-h-[200px] object-cover w-full"
                                loading="lazy"></figure>

                            <h2 class="text-xl font-semibold py-3">{{ $video->title }}</h2>
                        </a>
                    </div>
                @endforeach
                </div>
                <hr class="border ">
                <div class="mt-6 flex justify-center items-center ">
                    <x-buttons.primary type="button">Zobacz na YouTube</x-buttons.primary>
                </div>
            </div>
        </section>
    </main>

</x-layouts.master>
