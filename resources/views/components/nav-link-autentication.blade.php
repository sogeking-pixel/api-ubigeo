@php
$classes =  'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base font-medium leading-5 text-sky-600 hover:text-sky-600 hover:font-semibold hover:border-sky-400 focus:outline-none focus:text-sky-700 focus:border-sky-500 focus:font-semibold transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>