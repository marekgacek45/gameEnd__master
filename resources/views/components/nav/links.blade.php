<?php
use App\Models\Tag;
use App\Models\Category;
$categories = Category::all();
?>


{{--CATEGORIES--}}
<ul
class="flex flex-col lg:flex-row items-center p-4 lg:p-0 mt-4 lg:mt-0 gap-5 lg:gap-0 lg:space-x-12 font-medium rounded-md   ">
<li class="text-white font-medium rounded-md text-lg text-center inline-flex items-center transition-colors hover:text-actionColor-300 cursor-pointer"><a href="{{route('posts')}}">Posty</a></li>
<li class="text-white font-medium rounded-md text-lg text-center inline-flex items-center transition-colors hover:text-actionColor-300 cursor-pointer"><a href="{{route('videos')}}">Filmy</a></li>
@foreach ($categories as $category)
    <li>
        <div class="relative">
            <button data-dropdown-toggle="dropdown{{ $category->id }}" data-dropdown-trigger="hover"
                class="text-white font-medium rounded-md text-lg text-center inline-flex items-center transition-colors hover:text-actionColor-300"
                type="button">
                <a href="{{route('posts.category.index',$category->name)}}">{{ ucwords($category->name )}}</a>
                @if (Tag::where('category_id', $category->id)->exists())
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
                @endif
            </button>
            
            {{--TAGS--}}
            @if (Tag::where('category_id', $category->id)->exists())
            <div id="dropdown{{ $category->id }}"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-md shadow w-44 0 font-sans-serif">
                <ul class="py-2 text-sm text-gray-700 "
                    aria-labelledby="dropdown{{ $category->id }}">
                    @foreach (Tag::where('category_id', $category->id)->get() as $tag)
                        <li class="block px-4 py-2 hover:bg-gray-100">
                            
                            <a href="{{route('posts.tag.index',$tag->name)}}"
                                class="block px-4 py-2 hover:bg-gray-100 hover:text-actionColor-300 transition-all">
                                {{ucwords( $tag->name) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </li>
@endforeach
</ul>