@props([
    'active' => false,
    'mobile' => true,
])
<a {{ $attributes }}
    class="{{ $active ? 'underline decoration-sky-500' : '' }} text-white hover:text-sky-500 rounded-md px-3 py-2  font-medium {{ isset($mobile) ? 'text-base block' : 'text-sm' }}"
    aria-current="{{ $active ? 'page' : '' }}">{{ $slot }}</a>
