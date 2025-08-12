<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }
};
?>

<div class="cvs-nav fixed w-full backdrop-blur-sm top-0 z-50">
    <div class="cvs-nav-container max-w-6xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
        <div class="text-2xl font-bold relative">
            <a wire:navigate href="/" class="text-white no-underline hover:text-white focus:text-white active:text-white">
                <img src="{{ asset('img/UT-Logo.png') }}" alt="UT Logo" class="max-w-18 sm:max-w-24">
            </a>
        </div>

        <!-- Hamburger menu: visible on mobile only -->
        <button 
            class="cvs-nav-toggle lg:hidden text-white focus:outline-none hover:opacity-70" 
            onclick="toggleMenu()"
            aria-label="Toggle navigation menu"
            aria-expanded="false"
        >
            <svg class="w-8 h-8 cursor-pointer menu-open" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="w-8 h-8 cursor-pointer menu-close hidden" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Desktop nav: hidden on mobile -->
        <nav class="cvs-nav-desktop hidden lg:flex space-x-6 items-center font-semibold">
            <a href="/about" class="text-neutral-400 hover:text-[#fbb836] transition-colors">About</a>
            <a href="/library" class="text-neutral-400 hover:text-[#fbb836] transition-colors">Library</a>
            <a href="/initiations" class="text-neutral-400 hover:text-[#fbb836] transition-colors">Initiations</a>
            <a wire:navigate href="/events" class="text-neutral-400 hover:text-[#fbb836] transition-colors" wire:current="!text-[#fbb836]">Events</a>
            <a href="/donate" class="text-neutral-400 hover:text-[#fbb836] transition-colors">Donate</a>
            <a href="/shop" class="text-neutral-400 hover:text-[#fbb836] transition-colors">Shop</a>
            <a wire:navigate href="/book-a-session" class="text-black bg-white px-8 rounded-full py-1 transition-opacity">Book a Session</a>
            <a wire:navigate href="/login" class="text-black bg-white px-8 rounded-full py-1 transition-opacity">Login</a>
        </nav>
    </div>

    <!-- Mobile sliding nav -->
    <div 
        class="cvs-nav-mobile fixed top-0 right-0 h-screen w-64 bg-black/90 backdrop-blur-md z-50 transform transition-transform duration-300 ease-in-out translate-x-full lg:hidden"
    >
        <div class="p-8 flex flex-col space-y-6 font-semibold text-white overflow-y-auto h-full">
            <button 
                class="cvs-nav-close self-end mb-4 focus:outline-none hover:opacity-70" 
                onclick="toggleMenu()" 
                aria-label="Close navigation menu"
            >
                <svg class="w-8 h-8 cursor-pointer" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <a href="/about" class="hover:text-yellow-400 transition-colors" onclick="toggleMenu()">About</a>
            <a href="/library" class="hover:text-yellow-400 transition-colors" onclick="toggleMenu()">Library</a>
            <a href="/initiations" class="hover:text-yellow-400 transition-colors" onclick="toggleMenu()">Initiations</a>
            <a href="/events" class="hover:text-yellow-400 transition-colors" onclick="toggleMenu()">Events</a>
            <a href="/donate" class="hover:text-yellow-400 transition-colors" onclick="toggleMenu()">Donate</a>
            <a href="/shop" class="hover:text-yellow-400 transition-colors" onclick="toggleMenu()">Shop</a>
            <a href="/login" class="bg-white text-black rounded-full px-8 py-1 text-center transition-opacity" onclick="toggleMenu()">Login</a>
        </div>
    </div>
</div>

<script>
function toggleMenu() {
    const mobileNav = document.querySelector('.cvs-nav-mobile');
    // const overlay = document.querySelector('.cvs-nav-overlay');
    const toggleButton = document.querySelector('.cvs-nav-toggle');
    const menuOpen = document.querySelector('.menu-open');
    const menuClose = document.querySelector('.menu-close');

    const isOpen = !mobileNav.classList.contains('translate-x-full');

    if (isOpen) {
        mobileNav.classList.add('translate-x-full');
        // overlay.classList.add('hidden');
        menuOpen.classList.remove('hidden');
        menuClose.classList.add('hidden');
        toggleButton.setAttribute('aria-expanded', 'false');
    } else {
        mobileNav.classList.remove('translate-x-full');
        // overlay.classList.remove('hidden');
        menuOpen.classList.add('hidden');
        menuClose.classList.remove('hidden');
        toggleButton.setAttribute('aria-expanded', 'true');
    }
}

// Reset mobile menu on resize to desktop view
function handleResize() {
    const mobileNav = document.querySelector('.cvs-nav-mobile');
    // const overlay = document.querySelector('.cvs-nav-overlay');
    const toggleButton = document.querySelector('.cvs-nav-toggle');
    const menuOpen = document.querySelector('.menu-open');
    const menuClose = document.querySelector('.menu-close');

    if (window.innerWidth >= 1024) { // Matches Tailwind's lg breakpoint
        mobileNav.classList.add('translate-x-full');
        // overlay.classList.add('hidden');
        menuOpen.classList.remove('hidden');
        menuClose.classList.add('hidden');
        toggleButton.setAttribute('aria-expanded', 'false');
    }
}

// Run on initial load and resize
window.addEventListener('resize', handleResize);
document.addEventListener('DOMContentLoaded', handleResize);
</script>