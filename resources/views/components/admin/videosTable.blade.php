@props(['videos'])

<div class="overflow-hidden rounded-md border border-gray-200 shadow-md max-w-screen-xl mx-auto">
    <table class="w-full border-collapse text-left text-sm text-white">
        <thead class="bg-white">
            <tr>
                <th scope="col" class="px-6 py-4 font-bold text-black">Nazwa Posta</th>
                <th scope="col" class="px-6 py-4 font-bold text-black">Publikacja</th>
                <th scope="col" class="px-6 py-4 font-bold text-black">Kategoria</th>
                <th scope="col" class="px-6 py-4 font-bold text-black">Tagi</th>
                <th scope="col" class="px-6 py-4 font-bold text-black">Edycja</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100 ">


            @foreach ($videos as $video)
                <tr class="hover:bg-primaryColor-200 transition-all">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="flex flex-row justify-center items-center gap-3">
                            <a href="{{ $video->link }}" target="_blank"
                                class="flex justify-center items-center gap-4">
                                <div class="relative h-10 w-10">
                                    <img class="h-full w-full rounded-full object-cover object-center"
                                        src="{{ asset('storage/' . $video->thumbnail) }}"
                                        alt="miniaturka posta o tytule {{ $video->title }}" />

                                </div>

                                <h3 class="font-semibold text-white">{{ $video->title }}</h3>
                            </a>

                            
                        </div>
</div>
</th>
<td class="px-6 py-4">
    <span>{{ $video->created_at->diffForHumans() }}</span>
</td>
<td class="px-6 py-4 font-semibold">{{ $video->category->name }}</td>
<td class="px-6 py-4">
    <div class="flex gap-2">
        @foreach ($video->tags as $tag)
            <span
                class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600">{{ $tag->name }}
            </span>
        @endforeach

    </div>
</td>
<td class="px-6 py-4">
    <div class="flex justify-end gap-4">

        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6 hover:scale-110 transition-transform" x-tooltip="tooltip">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
        </button>

        <div id="popup-modal" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Czy na pewno chcesz usunąć
                            ten post?</h3>
                        <div class="flex justify-center items-center">

                            <form action="{{ route('admin.destroy', $video->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-modal-hide="popup-modal" type="sumbit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2 transition-colors">
                                    Usuń
                                </button>
                            </form>
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 transition-colors">Anuluj</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a x-data="{ tooltip: 'Edite' }" href="{{ route('admin.edit', $video->slug) }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6 hover:scale-110 transition-transform" x-tooltip="tooltip">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
            </svg>
        </a>
    </div>
</td>
</tr>
@endforeach


</tbody>
</table>

</div>


{{ $videos->links() }}


<div class="absolute bottom-5 right-5 ">

    <a href="{{ route('admin.video.create') }}"><button type="button"
            class="text-white bg-actionColor-300 hover:bg-actionColor-400 focus:ring-4 focus:outline-none focus:ring-white rounded-full  px-2 py-1 text-center inline-flex items-centertransition-colors">

            <i class="uil uil uil-video text-2xl "aria-hidden="true"></i>
            <span class="sr-only">Dodaj wideo</span>
        </button>
    </a>

    <a href="{{ route('admin.create') }}" class="ml-2"><button type="button"
            class="text-white bg-actionColor-300 hover:bg-actionColor-400 focus:ring-4 focus:outline-none focus:ring-white rounded-full  px-2 py-1 text-center inline-flex items-centertransition-colors">

            <i class="uil uil-plus text-2xl "aria-hidden="true"></i>
            <span class="sr-only">Dodaj post</span>
        </button>
    </a>
</div>
