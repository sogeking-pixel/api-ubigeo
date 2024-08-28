@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 my-2 py-2 border-l-4 border-sky-600 text-start text-lg font-semibold text-sky-600 bg-sky-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 my-2 py-2 border-l-4 border-transparent text-start text-lg font-medium text-gray-600 hover:font-semibold hover:text-gray-800 hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-400 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>