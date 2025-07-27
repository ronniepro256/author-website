@props(['type' => 'button', 'href' => null])

@if ($href)
    <a {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-medium transition ease-in-out duration-150']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-medium transition ease-in-out duration-150']) }}>
        {{ $slot }}
    </button>
@endif