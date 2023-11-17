<x-layouts.admin>

    <div class="max-w-md mx-auto">

        <div class="overflow-hidden rounded-md border border-gray-200 shadow-md max-w-screen-xl mx-auto">
            <table class="w-full border-collapse text-left text-sm text-white">
                <thead class="bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-bold text-black">#</th>
                        <th scope="col" class="px-6 py-4 font-bold text-black">Kategoria</th>
                        <th scope="col" class="px-6 py-4 font-bold text-black text-end pr-10">Edycja</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100 ">


                    @foreach ($categories as $category)
                        <tr class="hover:bg-primaryColor-200 transition-all">


                            <td class="px-6 py-4">
                                <span>{{ $category->id }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('posts.category.index', $category->name) }}" target='_blank'>
                                    <span>{{ ucfirst($category->name) }}</span></a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">

                                    <button data-modal-target="deleteCategory" data-modal-toggle="deleteCategory"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="h-6 w-6 hover:scale-110 transition-transform" x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>

                                    <x-admin.modals.delete id="deleteCategory"
                                        formAction="{{ route('admin.category.destroy', $category->id) }}">Czy na pewno
                                        chcesz usunąć tę kategorię?</x-admin.modals.delete>

                                    <button data-modal-target="update_category_modal" data-modal-toggle="update_category_modal"
                                        
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="h-6 w-6 hover:scale-125 transition-transform" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                    </button>
                                    <x-admin.modal id='update_category_modal' title='Edytuj Kategorię' formId='updateCategory'>
                                        <form action="{{ route('admin.category.update', $category->id) }}" method="post"
                                            id="updateCategory" >
                                            @csrf
                                            @method('patch')
                                            <x-form.input name="name" namePl="Nazwa Kategori"
                                                class=" w-full xl:w-3/4 " placeholder="Wprowadź tytuł"
                                                value="{{ $category->name }}" />
                                        </form>
                                    </x-admin.modal>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>


        {{-- {{ $categories->links() }} --}}

        {{-- ADD CATEGORIES --}}
        <div class="absolute bottom-5 right-5 ">
            <button data-modal-target="add-category-modal" data-modal-toggle="add-category-modal" type="button"
                class="text-white bg-actionColor-300 hover:bg-actionColor-400 focus:ring-4 focus:outline-none focus:ring-white rounded-full  px-2 py-1 text-center inline-flex items-centertransition-colors">

                <i class="uil uil-plus text-2xl "aria-hidden="true"></i>
                <span class="sr-only">Dodaj post</span>
            </button>

            <x-admin.modal id='add-category-modal' title='Dodaj Kategorię' formId='addCategory'>
                <form action="{{ route('admin.category.store') }}" method="post" id="addCategory">
                    @csrf
                    <x-form.input name="name" namePl="Nazwa Kategori" class=" w-full xl:w-3/4 "
                        placeholder="Wprowadź tytuł" />
                </form>
            </x-admin.modal>

        </div>
</x-layouts.admin>
