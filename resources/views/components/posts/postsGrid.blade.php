



@props(['posts'])

<div class="sm:grid md:grid-cols-2 lg:grid-cols-3 mt-8 gap-12">
    @foreach ($posts->skip(4) as $post)

        <x-posts.postCard :post="$post" />

    @endforeach
</div>