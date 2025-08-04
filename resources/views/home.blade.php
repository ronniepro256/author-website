@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-background dark:bg-dark-background text-primary dark:text-dark-text pt-16 md:pt-24 lg:pt-32 pb-8 md:pb-16 overflow-hidden">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-8 md:gap-16">
            {{-- Text Content (Left on desktop) --}}
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif leading-tight mb-4 animate-fade">
                    Unveiling 'Whispers of the Forgotten'
                </h1>
                <p class="text-lg md:text-xl mb-8 animate-slide">
                    Embark on an epic journey through ancient mysteries and modern-day suspense
                </p>
                {{-- "Discover More" Button - LINKED TO BUY PAGE's second section --}}
                <x-button href="{{ route('buy', 'whispers-of-the-forgotten') }}#echoes-of-the-silent-forest" class="bg-accent text-primary hover:bg-yellow-600 px-8 py-3 text-lg rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                    Discover More
                </x-button>
            </div>
            {{-- Image (Right on desktop, round bordered) --}}
            <div class="md:w-1/2 flex justify-center md:justify-end mt-8 md:mt-0">
                <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 box overflow-hidden shadow-2xl animate-bounceSlow">
                    <img src="{{ asset('images/book-cover-1.jpg') }}" alt="Elara Vance" class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Work Section -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">Featured Work: Whispers of the Forgotten</h2>
            <div class="flex flex-col md:flex-row items-center md:space-x-12">
                <div class="md:w-1/3 flex justify-center mb-8 md:mb-0">
                    <img src="{{ asset('images/book-cover-1.jpg') }}" alt="Whispers of the Forgotten Book Cover" class="w-2/3 md:w-full h-auto rounded-lg shadow-xl transform hover:scale-105 transition-transform duration-300">
                </div>
                <div class="md:w-2/3 text-center md:text-left">
                    <h3 class="text-3xl font-serif mb-2">Whispers of the Forgotten</h3>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">By Elara Vance | Fantasy, Mystery</p>
                    <p class="mb-6 leading-relaxed">
                        In a world cloaked in forgotten magic and ancient prophecies, a young historian unearths a secret that could unravel the very fabric of reality. "Whispers of the Forgotten" is a gripping narrative that blends intricate world-building with a thrilling mystery, challenging perceptions of truth and destiny.
                    </p>
                    <div class="flex items-center justify-center md:justify-start mb-6">
                        <span class="text-3xl font-bold text-accent mr-4">$24.99</span>
                        {{-- "Buy Now" Button - LINKED TO BUY PAGE --}}
                        <x-button href="{{ route('buy', 'whispers-of-the-forgotten') }}" class="bg-accent text-primary hover:bg-yellow-600 px-6 py-2 text-lg rounded-full shadow-lg transition-all duration-300">
                            Buy Now
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About The Author Section -->
    <section class="py-16 md:py-24 bg-background dark:bg-dark-background text-primary dark:text-dark-text">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">About The Author</h2>
            <div class="flex flex-col md:flex-row-reverse items-center md:space-x-reverse md:space-x-12">
                <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
                    <p class="text-lg leading-relaxed mb-6">
                        Elara Vance is a bestselling author renowned for her intricate fantasy worlds and compelling characters. With a background in ancient history, she weaves rich tapestries of myth and legend into her narratives, drawing readers into experiences that linger long after the final page.
                    </p>
                    {{-- "Read More" Button - LINKED TO ABOUT PAGE --}}
                    <x-button href="{{ route('about') }}" class="bg-accent text-primary hover:bg-yellow-600 px-6 py-3 text-lg rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                        Read More
                    </x-button>
                </div>
                <div class="md:w-1/3 flex justify-center md:justify-start">
                    <div class="relative w-48 h-48 md:w-64 md:h-64 rounded-full overflow-hidden shadow-xl border-4 border-accent">
                        <img src="{{ asset('images/author.jpg') }}" alt="Elara Vance" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Readers Are Saying Section -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">What Readers Are Saying</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-card>
                    <p class="italic mb-4">"A master storyteller who weaves intricate plots with profound emotional depth. Truly captivating!"</p>
                    <p class="font-semibold text-right">-Sarah J., Avid Reader</p>
                </x-card>
                <x-card>
                    <p class="italic mb-4">"Her characters jump off the page and into your heart. I felt every emotion, every struggle."</p>
                    <p class="font-semibold text-right">-David L., Book Club Member</p>
                </x-card>
                <x-card>
                    <p class="italic mb-4">"Rarely do you find an author who can make you laugh, cry, and think all at once. Highly recommend!"</p>
                    <p class="font-semibold text-right">-Emily K., Literary Blogger</p>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Join Our Reader Community Section -->
    <section class="py-16 md:py-24 bg-background dark:bg-dark-background text-primary dark:text-dark-text">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-serif mb-8">Join Our Reader Community</h2>
            <p class="text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
                Stay updated with new releases, exclusive content, and special offers directly from the author.
            </p>
            <form class="max-w-lg mx-auto flex flex-col sm:flex-row gap-4" action="{{ route('subscribe') }}" method="POST">
                @csrf {{-- Laravel CSRF token for form submission --}}
                <input type="text" name="first_name" placeholder="First Name" class="flex-grow p-3 border border-muted dark:border-dark-muted rounded-lg bg-white dark:bg-dark-surface focus:outline-none focus:ring-2 focus:ring-accent">
                <input type="email" name="email" placeholder="Your Email" class="flex-grow p-3 border border-muted dark:border-dark-muted rounded-lg bg-white dark:bg-dark-surface focus:outline-none focus:ring-2 focus:ring-accent" required>
                <x-button type="submit" class="bg-accent text-primary hover:bg-yellow-600 px-6 py-3 text-lg rounded-lg shadow-lg transition-all duration-300">
                    Subscribe
                </x-button>
            </form>
        </div>
    </section>

    <!-- Connect with Elara Vance Section -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-serif mb-8">Connect with Elara Vance</h2>
            <div class="flex flex-wrap justify-center gap-6 text-lg">
                <a href="#" class="hover:text-accent transition-colors duration-200">The Fantasy Journal</a>
                <span class="hidden md:inline">|</span>
                <a href="#" class="hover:text-accent transition-colors duration-200">Author's Blog</a>
                <span class="hidden md:inline">|</span>
                <a href="#" class="hover:text-accent transition-colors duration-200">Goodreads Profile</a>
                <span class="hidden md:inline">|</span>
                <a href="#" class="hover:text-accent transition-colors duration-200">Official Website</a>
            </div>
        </div>
    </section>

@endsection