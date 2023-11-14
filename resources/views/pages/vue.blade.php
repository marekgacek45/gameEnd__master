<x-layouts.master> 
    @section('title', 'gameEnd')
    @section('description', 'Wejdź do świata programowania i gier.')

    
    <header class=" max-w-screen-full h-[300px] mt-16">
        <img src="{{asset('assets/images/vue_header.avif')}}" alt="" width="1920px" height="500px" class="h-full object-cover">
    </header>

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



</x-layouts.master>
