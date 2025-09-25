<?php

use Livewire\Volt\Component;
use Illuminate\Http\Request;

new class extends Component {
    
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $this->redirect('/login', navigate: true);
    }
}; ?>

<div 
    x-data="{ open: false }" 
    class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-xs sm:gap-x-6 sm:px-6 lg:px-8"
>
    <button type="button" command="show-modal" commandfor="sidebar" class="-m-2.5 p-2.5 text-gray-700 hover:text-gray-900 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>

    <!-- Separator -->
    <div aria-hidden="true" class="h-6 w-px bg-gray-900/10 lg:hidden"></div>

    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <div class="flex-1"></div>
        
        <!-- Search -->
        <form action="#" method="GET" class="grid flex-1 grid-cols-1">
            <input name="search" placeholder="Search" aria-label="Search"
                class="col-start-1 row-start-1 block size-full bg-white pl-8 text-base text-gray-900 outline-hidden placeholder:text-gray-400 sm:text-sm/6" />
            <svg viewBox="0 0 20 20" fill="currentColor" class="pointer-events-none col-start-1 row-start-1 size-5 self-center text-gray-400">
                <path d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" />
            </svg>
        </form>

        <!-- Right section -->
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <!-- Notifications -->
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                <span class="sr-only">View notifications</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                    <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Separator -->
            <div aria-hidden="true" class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10"></div>

            <!-- Profile dropdown (Alpine.js) -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="relative flex items-center focus:outline-none cursor-pointer">
                    <img src="{{ asset('img-icon/admin.png') }}"
                        alt="User avatar"
                        class="size-8 rounded-full bg-gray-50 -outline-offset-1 outline-black/5" />
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold text-gray-600">{{ auth()->user()->name }}</span>
                        <svg viewBox="0 0 20 20" fill="currentColor" class="ml-2 size-5 text-gray-400">
                            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <!-- Dropdown menu -->
                <div 
                    x-show="open" 
                    @click.away="open = false"
                    x-transition 
                    class="absolute right-0 mt-2 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-black/5"
                >
                    <a wire:navigate href="/profile" class="block px-3 py-1 text-sm text-gray-900 hover:bg-gray-50 cursor-pointer">Your profile</a>
                    <button 
                        wire:click="logout" 
                        class="block w-full text-left px-3 py-1 text-sm text-gray-900 hover:bg-gray-50 cursor-pointer"
                    >
                        Sign out
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

