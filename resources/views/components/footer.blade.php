<footer class="bg-primary text-background py-8 md:py-12 text-center dark:bg-dark-surface dark:text-dark-text">
    <div class="container mx-auto px-4">
        <p class="text-xl font-serif mb-4">Author's Haven</p>

        {{-- Social Media Icons --}}
        <div class="flex justify-center space-x-6 mb-4">
            <a href="https://twitter.com/yourprofile" target="_blank" class="text-background hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                <i class="fab fa-x-twitter fa-2x"></i> {{-- or fab fa-twitter for old X logo --}}
            </a>
            <a href="https://instagram.com/yourprofile" target="_blank" class="text-background hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://facebook.com/yourprofile" target="_blank" class="text-background hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a href="https://wa.me/yourphonenumber" target="_blank" class="text-background hover:text-accent dark:text-dark-text dark:hover:text-accent transition-colors duration-200">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
        </div>

        <p>&copy; {{ date('Y') }} All rights reserved.</p>
    </div>
</footer>