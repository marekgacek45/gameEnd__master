@props(['posts'])

<x-admin.sidebar.aside />

<div class=" p-4 lg:ml-64">
    <div class="p-4 mt-10 ">
        {{ $slot }}

    </div>
  
</div>
