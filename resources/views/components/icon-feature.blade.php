@props(['icon', 'title', 'description'])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center text-center p-4']) }}>
    <span class="text-accent text-5xl mb-4">
        <i class="{{ $icon }}"></i>
    </span>
    <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
    <p class="text-gray-700 dark:text-gray-300">{{ $description }}</p>
</div>
