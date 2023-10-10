@props(['post'])



<div class="p-4 sm:p-8 md:p-0 md:py-4">
    <a href="{{route('post.show',$post->slug)}}" class="flex flex-col justify-start items-start gap-4">
    {{-- <a href="#" class="flex flex-col justify-start items-start gap-4"> --}}
    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="miniaturka artykułu o tytule {{$post->title}}" class="min-h-[250px] md:min-h-[200px] max-h-[250px] md:max-h-[200px] object-cover w-full">
    <span class="font-light text-sm text-gray-600">{{$post->created_at->diffForHumans()}}</span>
    <h2 class="text-xl font-semibold">{{$post->title}}</h2>
    {{-- <span>{{ trimContent($post->content, 250) }}</span> --}}
</a>
</div>