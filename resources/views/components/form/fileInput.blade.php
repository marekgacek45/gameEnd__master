<x-form.field>
    <x-form.label name="{{ $name }}" namePl="{{$namePl}}"/>

    
    
    <input
    {{$attributes(['class'=>'block w-full text-base text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50  focus:outline-none" '])}}
    
    name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>

    <p class="mt-1 text-sm text-gray-300 " id="file_input_help">PNG, JPG or WEBP (MAX. 800x400px)</p>

    <x-form.error name='{{ $name }}' />
</x-form.field>