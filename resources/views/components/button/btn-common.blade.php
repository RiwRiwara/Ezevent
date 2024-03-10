<!-- resources/views/components/button.blade.php -->
@props(['additionalClasses' => '', 'additionalAttributes' => [],
'type' => 'button'
])

@php
$classes = 'text-md font-semibold px-4 py-2 bg-neutral-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50 ' . $additionalClasses;
@endphp

@if ($type === 'link')
@php
$classes .= ' cursor-pointer';
@endphp

<a {{ $attributes->merge($additionalAttributes) }} style="white-space: nowrap;" class="{{ $classes }}">
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge($additionalAttributes) }} style="white-space: nowrap;" class="{{ $classes }}" type="button">
    {{ $slot }}
</button>
@endif