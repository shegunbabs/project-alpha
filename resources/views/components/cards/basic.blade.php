@props([
    'title',
    'footer'
])
<div {{ $attributes->class(['relative rounded-2xl bg-white shadow flex flex-col justify-between']) }} class="">
    <div {{ $title->attributes->class(['space-y-2 p-6']) }}>
        {{ $title }}

        {{ $body }}

    </div>
    <div {{ $footer->attributes->merge(['class' => 'rounded-b-2xl px-6 py-4 flex items-center space-x-1 text-sm font-medium bg-blue-100 text-blue-700 hover:text-blue-600']) }}>
        {{ $footer }}
    </div>
</div>
