@props(['active'])

@php
    $classes = ($active ?? false)
        ? "bg-slate-100 text-black hover:bg-slate-700 hover:text-white px-6 py-4 mb-1 rounded w-full"
        : "bg-slate-900 hover:bg-slate-700 text-white px-6 py-4 mb-1 rounded w-full"
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</li>
