<?php
use App\Models\Tag;
use App\Models\Category;
$categories = Category::all();
?>



<ul
class="flex flex-col items-center p-4 md:p-0 mt-4 gap-5 md:gap-0 font-medium rounded-lg bg-secondaryColor md:bg-primaryColor md:flex-row md:space-x-12 md:mt-0  font-sans-serif ">
@foreach ($categories as $category)
    <li>
        <div class="relative">
            <button data-dropdown-toggle="dropdown{{ $category->id }}" data-dropdown-trigger="hover"
                class="text-white font-medium rounded-lg text-lg text-center inline-flex items-center hover:text-actionColor-100 transition-all"
                type="button">
                {{-- <a href="{{route('posts.category.index',$category->name)}}">{{ ucwords($category->name )}}</a> --}}
                <a href="#">{{ ucwords($category->name )}}</a>
                @if (Tag::where('category_id', $category->id)->exists())
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="m1 1 4 4 4-4" />
                    
                </svg>
                @endif
            </button>
            
            
            @if (Tag::where('category_id', $category->id)->exists())
            <div id="dropdown{{ $category->id }}"
                class="z-10 hidden bg-actionColor-200 rounded-lg shadow w-44 absolute ">
                
                <ul class="py-2 text-md text-white"
                    aria-labelledby="dropdown{{ $category->id }}">
                    @foreach (Tag::where('category_id', $category->id)->get() as $tag)
                        <li>
                            {{-- <a href="{{route('posts.tag.index',$tag->name)}}" --}}
                            <a href="#"
                                class="block px-4 py-2 hover:bg-actionColor-300 transition-colors">
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