@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 border-b-2 border-yellow-200 text-sm font-medium leading-5 text-gray-900 font-bold focus:outline-none focus:border-yellow-700 transition' : 'inline-flex font-semibold items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-900 hover:text-gray-500 hover:border-yellow-300 focus:outline-none focus:text-gray-700 focus:border-yellow-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
