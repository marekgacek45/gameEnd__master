<x-layouts.master>
    @section('title', 'Wszyskie Posty - Gameend')

    @if ($newestPost)
    <main class="mt-16 md:mt-24 container max-w-screen-xl flex flex-col justify-between mx-auto p-10 xl:p-0">
            <section class="space-y-8 mb-12">
                <h2 class="text-3xl font-semibold font-pixel uppercase">Świeżutkie posty</h2>
                <x-posts.latestPosts :newestPost='$newestPost' :latestPosts="$latestPosts" />
            </section>

            <hr class="border border-actionColor-400">

            <section class="mt-2">

                <x-posts.postsGrid :posts="$posts" />
            </section>
        </main>
        @else
        <main class="flex flex-col justify-center items-center md:gap-6 h-full space-y-5 mb-8 mt-4">

            <h3 class="mt-24 text-3xl font-pixel text-center">Niedługo coś tu będzie, wpadnij następnym razem!</h3>
            <img src="{{asset('assets/no-posts.gif')}}" alt="" width="400px" class="w-[300px] md:w-[500px]">
            <a href="{{route('home')}}" class="hover:text-actionColor-400 transition-colors">Wróc na Stronę Główną</a>
        </main>
        @endif
   
</x-layouts.master>
