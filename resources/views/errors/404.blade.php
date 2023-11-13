<x-layouts.master>
    @section('title', 'gameEnd')
    <main class="flex flex-col justify-center items-center h-full space-y-5 mb-8 mt-4">

        <h3 class="mt-24 text-3xl">Chyba zbłądziłeś...</h3>
        <img src="{{asset('assets/errors/404.gif')}}" alt="" width="400px">
        <a href="{{route('home')}}">Wróc na Stronę Główną</a>
    </main>
</x-layouts.master>