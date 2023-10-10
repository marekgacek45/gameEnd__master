@props(['name','namePl'])

<x-form.field>
    <x-form.label name="{{ $name }}" namePl="{{$namePl}}"/>

    
    
    <input
    {{$attributes(['class'=>'text-gray-900 text-base rounded-md focus:ring-actionColor-100 focus:border-actionColor-100 block p-2.5 '])}}
    
    name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>



    <x-form.error name='{{ $name }}' />
</x-form.field>