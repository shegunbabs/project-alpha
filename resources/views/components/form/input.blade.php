@props([
    'disabled' => false,
])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 focus:border-blue-500 focus:ring-blue-500 shadow-sm block w-full rounded-md text-gray-800']) !!}>
