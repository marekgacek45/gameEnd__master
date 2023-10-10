@props(['name','namePl'])

<x-form.field>
<x-form.label name="{{$name}}" namePl={{$namePl}} />
<select name={{$name}} id={{$name}}    {{$attributes(['class'=>'text-gray-900 text-base rounded-md focus:ring-actionColor-100 focus:border-actionColor-100 block'])}}>
   {{$slot}}

</select>
<x-form.error name='{{ $name }}' />
</x-form.field>
