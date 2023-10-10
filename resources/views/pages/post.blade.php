<x-layouts.master>
    @section('title', $post->title . ' - Gameend')

    <div class="mt-32 mx-auto px-4 md:px-12 xl:p-0 mb-8 max-w-screen-lg w-full ">
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="miniaturka posta o tytule {{ $post->title }}"
            class="max-h-[600px] w-full object-cover">
    </div>
    <article class="">



        <div class="flex flex-col justify-center items-center px-4 lg:px-0">

            <div class="mb-5 flex flex-col justify-center items-center text-center">
                <h2 class="font-bold text-2xl md:text-4xl mb-5">{{ $post->title }}</h2>


                {{-- <a href="{{route('posts.category.index',$post->category->name)}}"><h3 class="font-bold ">{{$post->category->name}}</h3></a> --}}


                <a href="#">
                    <h3 class="font-bold ">{{ ucfirst($post->category->name) }}</h3>
                </a>
                <span>{{ $post->created_at->diffForHumans() }}</span>
                <div id="postContent" class="my-6 max-w-screen-md">
                    {!! $post->content !!}
                </div>
                <p></p>
            </div>

        </div>
    </article>

</x-layouts.master>
