<header class="bg-primary text-background sticky top-0 z-50 shadow-md dark:bg-dark-surface dark:text-dark-text">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-serif hover:text-accent transition-colors duration-200">Elara Vance</a>
        <div x-data="{ open: false }" class="w-full md:w-auto">
            <button x-on:click="open = !open" class="md:hidden focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            {{--
                The 'hidden' class hides it by default on small screens.
                'md:flex' ensures it's always visible as a flex container from the 'md' breakpoint upwards.
                'x-show="open"' then handles the toggle behavior ONLY on small screens.
            --}}
            <ul x-show="open" x-cloak
                class="hidden md:flex md:space-x-6 md:mt-0 mt-4 space-y-2 md:space-y-0 bg-primary md:bg-transparent w-full md:w-auto dark:bg-dark-surface md:dark:bg-transparent">
                <li><a href="{{ route('home') }}" class="block px-4 py-2 hover:text-accent transition-colors duration-200">Home</a></li>
                <li><a href="{{ route('buy', 'book-one') }}" class="block px-4 py-2 hover:text-accent transition-colors duration-200">Buy</a></li>
                <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-accent transition-colors duration-200">About</a></li>
            </ul>
        </div>
    </nav>
</header>