<div class="p-4 sm:p-8 md:p-0  border border-black rounded-md transition-shadow  overflow-hidden hover03">

    <a href="{{ $video->link }}"target="_blank" class="flex flex-col justify-center items-center group">
        <figure><img src="{{ asset('storage/' . $video->thumbnail) }}"
            alt="miniaturka filmu {{ $video->title }}"
            class="min-h-[200px]  max-h-[20px]  object-cover w-full"
            loading="lazy"></figure>

        <h2 class="text-xl font-semibold py-3">{{ $video->title }}</h2>
    </a>
</div>