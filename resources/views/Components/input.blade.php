@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 p-3  py-1.5 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 sm:text-sm sm:leading-6',
]) !!}>
