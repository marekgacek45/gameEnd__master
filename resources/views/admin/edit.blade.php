<x-layouts.admin>
    <main>
        <div>
            <h2 class="text-center uppercase font-bold text-2xl mb-8">Edytuj - {{ $post->title }}</h2>


            <form action="{{ route('admin.update', $post->slug) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 xl:grid-cols-6 gap-4">

                    <!--LEFT SIDE-->
                    <div class="xl:col-span-4 p-8 bg-primaryColor rounded-md w-full">
                        <x-form.input name="title" namePl="Tytuł Posta" class=" w-full xl:w-3/4"
                            placeholder="Wprowadź tytuł" :value="old('title', $post->title)" />
                        


                            <textarea name="content" id="editor">{!!$post->content!!}</textarea>

                    </div>
                    <!--RIGHT SIDE-->
                    <div class="xl:col-span-2  p-8 bg-primaryColor rounded-md max-h-[450px]">
                        <x-form.select name="category_id" namePl="kategoria">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ ucwords($category->name) }}</option>
                            @endforeach
                        </x-form.select>

                        <x-form.checkbox name="" namePl="Tagi">
                            @foreach ($tags as $tag)
                                <li>
                                    <div class="flex items-center p-2 rounded-md hover:bg-gray-100">
                                        <input type="checkbox" name="tags[]" id="{{ $tag->id }}"
                                            value="{{ $tag->id }}"
                                            {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'checked' : '' }}
                                            class="w-4 h-4 text-actionColor-100 bg-gray-100 border-gray-300 rounded-md focus:ring-actionColor-100 ">
                                        <label for={{ $tag->id }}
                                            class="w-full ml-2 text-sm font-medium text-gray-900 rounded-md ">{{ $tag->name }}</label>
                                    </div>
                                </li>
                            @endforeach

                        </x-form.checkbox>

                        <div class="flex gap-6">
                            <x-form.fileInput name="thumbnail" namePl="miniaturka" type="file" />
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" width="150px"
                                class="object-fill">

                        </div>

                        <x-buttons.submit>Edytuj Post</x-buttons.submit>

                    </div>
                </div>
        </div>

        </form>

        </div>
    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}',
                }
            })
            .catch( error => {
                  
            } );
    </script>
</x-layouts.admin>
