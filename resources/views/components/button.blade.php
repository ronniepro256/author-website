    @props(['type' => 'button', 'href' => null])

    @if ($href)
        <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-medium transition ease-in-out duration-150 cursor-pointer active:scale-95']) }}>
            {{ $slot }}
        </a>
    @else
        <button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center font-medium transition ease-in-out duration-150 cursor-pointer active:scale-95']) }}>
            {{ $slot }}
        </button>
    @endif
    