<div x-data="{ active: 0, slides: @json($slides ?? [['image' => 'images/book-cover-1.jpg', 'title' => 'Featured Book', 'description' => 'Discover Elara Vance’s latest novel.']]) }" x-init="$watch('active', () => { setTimeout(() => { active = (active + 1) % slides.length }, 5000) })" class="relative">
    <div class="h-96 bg-cover bg-center" :style="'background-image: url(' + (slides[active] ? '{{ asset('') }}' + slides[active].image : '{{ asset('') }}') + ')'">
        <div class="container mx-auto px-4 h-full flex items-center">
            <div class="text-background">
                <h1 x-text="slides[active]?.title ?? ''" class="text-4xl font-serif mb-2"></h1>
                <p x-text="slides[active]?.description ?? ''" class="text-lg"></p>
            </div>
        </div>
    </div>
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="active = index" :class="{ 'bg-accent': active === index, 'bg-muted': active !== index }" class="w-3 h-3 rounded-full"></button>
        </template>
    </div>
</div>