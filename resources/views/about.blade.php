@extends('layouts.app')

@section('content')
    <!-- My Story Section -->
    <section class="relative bg-background dark:bg-dark-background text-primary dark:text-dark-text py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center md:items-start gap-12 md:gap-16">
            {{-- Image (Left on desktop) --}}
            <div class="md:w-1/3 flex justify-center flex-shrink-0 order-1 md:order-1">
                <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 rounded-full overflow-hidden shadow-2xl border-4 border-accent">
                    {{-- Using a placeholder image for now, you might want a specific 'author-about.jpg' --}}
                    <img src="{{ asset('images/author.jpg') }}" alt="Author Elara Vance" class="absolute inset-0 w-full h-full object-cover">
                </div>
            </div>

            {{-- Text Content (Right on desktop) --}}
            <div class="md:w-2/3 text-center md:text-left order-2 md:order-2">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif leading-tight mb-6">My Story</h1>
                <p class="text-lg leading-relaxed mb-4">
                    From the quiet corners of my childhood home, where stories whispered through dusty book pages, my journey as an author began. I always found solace and adventure within the narrative, leading me to believe in the transformative power of words. My aim is not just to write stories, but to craft experiences that linger long after the final page is turned.
                </p>
                <p class="text-lg leading-relaxed mb-4">
                    My work is deeply influenced by the human condition—the intricate tapestry of emotions, resilience, and the relentless pursuit of meaning. I believe that every character, no matter how flawed, carries a universal truth, and exploring these truths is what truly brings a story to life. My passion lies in delving into the unspoken, the profound, and the beautifully complex aspects of our shared existence.
                </p>
                <p class="text-lg leading-relaxed">
                    Through my narratives, I hope to offer readers not just an escape, but a mirror—a reflection of their own struggles, triumphs, and the quiet courage that defines us. It's a privilege to connect with readers on such an intimate level, and I pour my heart into every sentence, hoping to ignite a spark of introspection or simply provide a moment of profound enjoyment.
                </p>
            </div>
        </div>
    </section>

    <!-- My Milestones & Achievements Section -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">My Milestones & Achievements</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="flex items-start bg-white dark:bg-dark-background p-6 rounded-lg shadow-md">
                    <span class="text-accent text-4xl font-bold mr-4">01</span>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">First Novel Published: 'Echoes of the Silent Forest'</h3>
                        <p class="text-gray-700 dark:text-gray-300">My debut novel, Echoes of the Silent Forest, was released to critical acclaim, praised for its lyrical prose and intricate character development. It marked the beginning of my professional writing career.</p>
                    </div>
                </div>
                <div class="flex items-start bg-white dark:bg-dark-background p-6 rounded-lg shadow-md">
                    <span class="text-accent text-4xl font-bold mr-4">02</span>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Awarded 'The Golden Quill' for Literary Excellence</h3>
                        <p class="text-gray-700 dark:text-gray-300">Received The Golden Quill award for "Whispers of the Forgotten Shore," recognized for its significant contribution to contemporary fiction and its exploration of historical themes.</p>
                    </div>
                </div>
                <div class="flex items-start bg-white dark:bg-dark-background p-6 rounded-lg shadow-md">
                    <span class="text-accent text-4xl font-bold mr-4">03</span>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">International Bestseller: 'The Alchemist's Daughter'</h3>
                        <p class="text-gray-700 dark:text-gray-300">"The Alchemist's Daughter" achieved international bestseller status, captivating readers worldwide with its magical realism and profound philosophical undertones.</p>
                    </div>
                </div>
                <div class="flex items-start bg-white dark:bg-dark-background p-6 rounded-lg shadow-md">
                    <span class="text-accent text-4xl font-bold mr-4">04</span>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Guest Lecturer at Literary Festivals</h3>
                        <p class="text-gray-700 dark:text-gray-300">Invited to speak at prestigious literary festivals, sharing insights into my creative process and the art of storytelling, fostering a deeper connection with aspiring writers and readers.</p>
                    </div>
                </div>
                <div class="flex items-start bg-white dark:bg-dark-background p-6 rounded-lg shadow-md">
                    <span class="text-accent text-4xl font-bold mr-4">05</span>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Launched 'Author's Haven' Online Community</h3>
                        <p class="text-gray-700 dark:text-gray-300">Created 'Author's Haven,' a dedicated online platform for readers to engage with my work, participate in discussions, and gain exclusive access to behind-the-scenes content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Writing Philosophy Section -->
    <section class="py-16 md:py-24 bg-background dark:bg-dark-background text-primary dark:text-dark-text">
        <div class="container mx-auto px-4 text-center max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-serif mb-8">My Writing Philosophy</h2>
            <p class="text-lg leading-relaxed mb-4">
                My writing philosophy centers on empathy and the power of narrative to bridge divides. I believe stories are the oldest and most profound way we understand ourselves and others. Each word is carefully chosen, not just to advance the plot, but to evoke genuine emotion and invite contemplation.
            </p>
            <p class="text-lg leading-relaxed mb-4">
                I am driven by the belief that literature should challenge, comfort, and inspire. It should hold a mirror to society while also offering a glimpse into extraordinary possibilities. Authenticity is paramount whether exploring historical events or futuristic landscapes, the emotional truth of the characters must resonate deeply.
            </p>
        </div>
    </section>

    <!-- What Readers Say Section (Reusing x-card) -->
    <section class="py-16 md:py-24 bg-muted dark:bg-dark-surface text-primary dark:text-dark-text">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-serif text-center mb-12">What Readers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8"> {{-- Adjusted to 4 columns as per design --}}
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
                <x-card>
                    <p class="italic mb-4">"Her prose is simply beautiful, a true artist with words. This book will stay with me."</p>
                    <p class="font-semibold text-right">-Mark T., Retired Professor</p>
                </x-card>
            </div>
        </div>
    </section>

    <!-- Let's Connect Section -->
    <section class="py-16 md:py-24 bg-background dark:bg-dark-background text-primary dark:text-dark-text">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-serif mb-8">Let's Connect</h2>
            <p class="text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
                I love hearing from my readers and engaging with the community. Feel free to reach out through my social channels or send a direct message. Your thoughts and insights are always welcome!
            </p>
            {{-- Social Media Icons (reusing footer style) --}}
            <div class="flex justify-center space-x-6 mb-8">
                <a href="#" target="_blank" class="text-primary hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                    <i class="fab fa-x-twitter fa-2x" aria-label="X (formerly Twitter)"></i>
                </a>
                <a href="#" target="_blank" class="text-primary hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                    <i class="fab fa-instagram fa-2x" aria-label="Instagram"></i>
                </a>
                <a href="#" target="_blank" class="text-primary hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                    <i class="fab fa-facebook-f fa-2x" aria-label="Facebook"></i>
                </a>
                <a href="#" target="_blank" class="text-primary hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                    <i class="fab fa-whatsapp fa-2x" aria-label="WhatsApp"></i>
                </a>
            </div>

            <h3 class="text-2xl font-serif mb-4">Subscribe to our newsletter</h3>
            <form class="max-w-lg mx-auto flex flex-col sm:flex-row gap-4">
                <input type="email" placeholder="Your Email" class="flex-grow p-3 border border-muted dark:border-dark-muted rounded-lg bg-white dark:bg-dark-surface focus:outline-none focus:ring-2 focus:ring-accent">
                <x-button type="submit" class="bg-accent text-primary hover:bg-yellow-600 px-6 py-3 text-lg rounded-lg shadow-lg transition-all duration-300">
                    Subscribe
                </x-button>
            </form>
        </div>
    </section>

@endsection
