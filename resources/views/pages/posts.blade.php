<x-layouts.master>
    @section('title', 'Wszyskie Posty - Gameend')

    <main class="mt-16 md:mt-24 container max-w-screen-xl flex flex-col justify-between mx-auto p-10 xl:p-0">

        <section class="space-y-8 mb-12">
            <h2 class="text-3xl font-semibold">Najnowsze posty</h2>
            <x-posts.latestPosts :newestPost='$newestPost' :latestPosts="$latestPosts" />
        </section>

        <hr class="border ">

        <section class="mt-2">
            
            <x-posts.postsGrid :posts="$posts" />
        </section>

    </main>
</x-layouts.master>
