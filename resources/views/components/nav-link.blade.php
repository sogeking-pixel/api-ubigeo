@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-sky-600 text-base font-semibold leading-5 text-gray-900 focus:outline-none border-sky-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-medium hover:font-semibold leading-5 text-gray-600 hover:text-gray-800 hover:border-gray-400 focus:outline-none focus:text-gray-700 focus:border-gray-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
