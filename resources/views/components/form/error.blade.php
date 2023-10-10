@props(['name'])


@error($name)
<p class="text-red-500 text-base">{{ $message }}</p>
@enderror
