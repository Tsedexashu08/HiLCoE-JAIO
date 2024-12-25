@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center h-full px-4 py-2 bg-gray-100 border-b-2 border-indigo-600 text-md font-semibold text-gray-900 focus:outline-none transition duration-150 ease-in-out'
            : 'flex items-center h-full px-4 py-2 border-b-2 border-transparent text-md font-medium text-gray-600 hover:text-gray-800 hover:border-gray-400 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>