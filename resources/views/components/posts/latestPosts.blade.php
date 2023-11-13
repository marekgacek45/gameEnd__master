@props(['newestPost', 'latestPosts'])

<div class="flex flex-col md:flex-row gap-8 justify-between">
    <!--LATEST POST-->

    <div class="w-full md:w-1/2 ">
        <a href="{{route('post.show',$newestPost->slug)}}" class="flex flex-col justify-start items-start gap-4">

            <img src="{{ asset('storage/' . $newestPost->thumbnail) }}" alt="miniaturka artykułu o tytule {{$newestPost->title}}"
                class="max-h-[350px] min-h-[350px] w-full object-cover ">
            <span class="font-light text-sm text-gray-600">{{ $newestPost->created_at->diffForHumans() }}</span>
            <h2 class="text-4xl font-semibold">{{ $newestPost->title }}</h2>
            <span class="font-normal">{!! \Illuminate\Support\Str::limit($newestPost->content, 250, '...') !!}</span>
            
        </a>
    </div>

    <!--OTHER 3 POSTS-->

    <div class=" flex flex-col w-full md:w-1/2 gap-8 md:gap-4 ">
        @foreach ($latestPosts as $post)
            <div class="md:p-4">
                <a href="{{route('post.show',$post->slug)}}" class="flex gap-4 md:gap-6">
                    <div class="w-1/2  self-center md:self-start">

                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="miniaturka artykułu o tytule {{$post->title}}"
                            class="max-h-[150px] min-h-[150px] w-full object-cover">
                    </div>
                    <div class="w-1/2 space-y-5">
                        <span class="font-light text-sm text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                        <h2 class="text-xl font-semibold ">{{ $post->title }}</h2>

                    </div>
                </a>
            </div>
            @unless ($loop->last)
            <hr class=" border border-gray-600">
        @endunless
        @endforeach
    </div>

</div>
</div>