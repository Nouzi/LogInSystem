@props(['name', 'url'])
@php
    $classes = request()->is($url) ? 'bg-gray-900 text-white' : '';
@endphp

<a
   {{$attributes->merge(['class' => "$classes . text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"])}}
   aria-current="page"
>
    {{$name}}
</a>
