@extends('layouts.app')

@section('content')
    <!-- Book Detail Hero Section -->
    <section class="relative bg-background dark:bg-dark-background text-primary dark:text-dark-text py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center md:items-start gap-12 md:gap-16">
            {{-- Book Cover Image --}}
            <div class="md:w-1/3 flex justify-center flex-shrink-0">
                <img src="{{ asset('images/book-cover-2.jpg') }}" alt="Echoes of the Silent Forest Book Cover" class="w-2/3 md:w-full h-auto rounded-lg shadow-2xl transform hover:scale-105 transition-transform duration-300">
            </div>

            {{-- Book Details and Purchase Options --}}
            <div class="md:w-2/3 text-center md:text-left">
                <p class="text-sm uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">Rule of Threes</p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif leading-tight mb-4" id="echoes-of-the-silent-forest">
                    Echoes of the Silent Forest
                </h1>
                <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 mb-6">A Journey Through Whispers and Ancient Secrets</p>

                <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">By Elara Vance</p> {{-- Added author for consistency --}}
                <span class="text-4xl font-bold text-accent mb-6 block">$24.99</span>

                <p class="mb-8 leading-relaxed text-gray-700 dark:text-gray-300">
                    In a world cloaked in perpetual mist, Elara, a young cartographer, stumbles upon an ancient map hinting at a forgotten civilization deep within the treacherous Silent Forest. Driven by curiosity and a haunting whisper she can't explain, Elara embarks on a perilous journey, encountering mythical creatures, uncovering long-buried prophecies, and confronting the dark forces that guard the forest's deepest secrets. 'Echoes of the Silent Forest' is a breathtaking saga of courage, destiny, and the enduring power of nature.
                </p>

                {{-- Format and Quantity Selection --}}
                <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4 mb-8">
                    <div class="w-full sm:w-auto">
                        <label for="format" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Choose Format</label>
                        <select id="format" class="block w-full sm:w-48 p-3 border border-muted dark:border-dark-muted rounded-lg bg-white dark:bg-dark-surface focus:outline-none focus:ring-2 focus:ring-accent">
                            <option value="hardcover">Hardcover</option>
                            <option value="paperback">Paperback</option>
                            <option value="ebook">Ebook</option>
                        </select>
                    </div>
                    <div class="w-full sm:w-auto">
                        <label for="quantity" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Quantity</label>
                        <input type="number" id="quantity" value="1" min="1" class="block w-full sm:w-24 p-3 border border-muted dark:border-dark-muted rounded-lg bg-white dark:bg-dark-surface text-center focus:outline-none focus:ring-2 focus:ring-accent">
                    </div>
                </div>

                {{-- Buy Now Button (triggers modal) --}}
                <x-button x-data x-on:click="$dispatch('open-payment-modal')" class="bg-accent text-primary hover:bg-yellow-600 px-10 py-4 text-xl rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                    Buy Now
                </x-button>
            </div>
        </div>
    </section>

    <!-- What Readers Say Section -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">What Readers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8"> {{-- Changed to 2 columns as per design --}}
                <x-card>
                    <p class="italic mb-4">"A mesmerizing read! The world-building is exquisite, and Elara's journey truly unforgettable. I couldn't put it down."</p>
                    <p class="font-semibold text-right">-Anya Sharma, Reader</p>
                </x-card>
                <x-card>
                    <p class="italic mb-4">"The Silent Forest breathes on every page. This book is a masterpiece of modern fantasy, rich with emotion and adventure."</p>
                    <p class="font-semibold text-right">-Dr. Alistair Finch, Literary Critic</p>
                </x-card>
                <x-card>
                    <p class="italic mb-4">"Absolutely captivating. The prose is beautiful, and the mystery kept me hooked until the very last word."</p>
                    <p class="font-semibold text-right">-Emily K., Literary Blogger</p>
                </x-card>
                <x-card>
                    <p class="italic mb-4">"An absolute triumph of fantasy literature. The characters feel real, the plot is gripping, and the magic is truly enchanting."</p>
                    <p class="font-semibold text-right">-Sapna Rodrigues, Reader</p>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Why You Should Read This Book Section (Updated to use x-icon-feature) -->
    <section class="py-16 md:py-24 bg-background dark:bg-dark-background text-primary dark:text-dark-text">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-serif mb-12">Why You Should Read This Book</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <x-icon-feature
                    icon="fas fa-book-open"
                    title="Immersive Storytelling"
                    description="Dive into a richly crafted world with intricate lore and captivating characters."
                />
                <x-icon-feature
                    icon="fas fa-compass"
                    title="Unforgettable Adventure"
                    description="Experience a thrilling quest through a mysterious forest fraught with danger and discovery."
                />
                <x-icon-feature
                    icon="fas fa-brain"
                    title="Deep Themes"
                    description="Explore profound questions of destiny, courage, and humanity's place in nature."
                />
                <x-icon-feature
                    icon="fas fa-feather-alt"
                    title="Stunning Prose"
                    description="Lose yourself in elegant writing that paints vivid landscapes and evokes deep emotions."
                />
            </div>
        </div>
    </section>

    <!-- A Note from the Author Section -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4 text-center max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-serif mb-8">A Note from the Author</h2>
            <p class="text-lg leading-relaxed mb-8">
                Dear Reader, 'Echoes of the Silent Forest' has been a labor of love, born from countless hours of imagination and research into ancient myths and the resilience of the human spirit. I poured my heart into Elara's journey, hoping you would find a piece of yourself in her courage and discoveries. May the whispers of the Silent Forest guide your own adventures. Happy reading!
            </p>
            <p class="text-xl font-semibold font-serif">- Elara Vance</p>
        </div>
    </section>

    <!-- Payment Modal Component -->
    <x-payment-modal />
@endsection
