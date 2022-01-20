@props([
    'label' => null
])
<div class="mt-6 relative">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-gray-300"></div>
    </div>
    <div class="relative flex justify-center text-sm">
        <span class="px-2 bg-white text-gray-500">
            {{ $label ?? $slot }}
        </span>
    </div>
</div>
