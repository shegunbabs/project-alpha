@props([
    'label',
    'type' => 'text'
])
<div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm focus-within:ring-1 focus-within:ring-blue-600 focus-within:border-blue-600">
    <label for="name" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-sm font-medium text-gray-900">{{ $label }}</label>
    <input {{ $attributes->merge(['class' => 'block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm']) }} type="{{ $type }}">
</div>
