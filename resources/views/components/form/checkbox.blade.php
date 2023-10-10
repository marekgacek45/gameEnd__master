@props(['name','namePl'])
<x-form.field>
    <x-form.label name="{{ $name }}" namePl="{{$namePl}}"/>

<button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center px-4 py-2 text-base font-medium text-center text-black bg-white rounded-md 0 focus:ring-4 focus:outline-none focus:ring-actionColor-100 " type="button">Wybierz<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>

<!-- Dropdown menu -->
<div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 py-4">
    
    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 " aria-labelledby="dropdownSearchButton">
    
         {{$slot}}
    </ul>
    
</div>
</x-form.field>