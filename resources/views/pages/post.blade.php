<x-layouts.master>
    @section('title', $post->title . ' - gameEnd')
    @php
        $description = \Illuminate\Support\Str::limit($post->content, 157, '...');
    @endphp

    @section('description', $description)

    <div class="mx-auto px-4 md:px-12 xl:p-0 mb-8 max-w-screen-lg w-full " style="margin-top:4.6em">
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="miniaturka posta o tytule {{ $post->title }}"
            class="max-h-[600px] w-full object-cover">
    </div>
    <article class="">



        <div class="flex flex-col justify-center items-center px-4 lg:px-0 ">

            <div class="mb-5 flex flex-col justify-center items-center text-center gap-4">
                <h2 class="font-bold text-2xl md:text-4xl mb-5">{{ $post->title }}</h2>


                <a href="{{ route('posts.category.index', $post->category->name) }}">
                    <h3 class="font-bold ">{{ $post->category->name }}</h3>
                </a>
                <div class="flex justify-center items-center gap-2">

                    @foreach ($post->tags as $tag)
                        <a href="{{route('posts.tag.index',$tag->name)}}"><span
                            class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs  text-primaryColor-400 hover:scale-90 transition-all">{{ $tag->name }}</a>
                        </span>
                    @endforeach
                </div>
                <span>{{ $post->created_at->diffForHumans() }}</span>
                <div id="postContent" class="my-6 max-w-screen-md text-left">
                    {!! $post->content !!}
                </div>
                <p></p>
            </div>

        </div>
    </article>

</x-layouts.master>
