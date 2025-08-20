<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
// #[Title('Universal Tantra | Booking')] 
class extends Component {
    //
}; ?>

<div class="pt-20">
    <x-frontend.c-section>
        <x-frontend.c-header-lg 
            :class="'text-[#fbb836] text-shadow-lg sm:!text-center'" 
            :message="'Book a Session'" 
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm !text-center max-w-2xl mx-auto'"
            :message="'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum fuga ex officiis! Eos, possimus. Eum laboriosam aspernatur eos perferendis sunt.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum fuga ex officiis! Eos, possimus. Eum laboriosam aspernatur eos perferendis sunt.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section :gridColumn="1" class="!py-5">
        <div class="flex flex-col lg:flex-row items-center relative gap-6 mt-16">
            <x-frontend.c-header-md
                :class="'text-white text-shadow-lg'" 
                :message="'Select Service'" 
            />
        </div>
    </x-frontend.c-section>
    <x-frontend.c-section class="!py-1">
        <div class="grid grid-cols-1 gap-3 lg:grid-cols-2 lg:gap-8">
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
            <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                <div class="rounded-full h-10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        {{-- width="2rem"  --}}
                        height="2.5rem">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M10 8l4 4-4 4"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span>
                        Lorem Ipsum
                    </span>
                    <span class="text-sm font-light">
                        1 Hour
                    </span>
                </div>
                <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" 
                        fill="none" 
                        stroke="currentColor" 
                        stroke-width="2" 
                        stroke-linecap="round" 
                        stroke-linejoin="round" 
                        height="2.5rem">
                        {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                        <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                </div>
            </a>
        </div>
    </x-frontend.c-section>
    {{-- <x-frontend.c-section>
        <div>
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm'"
                :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae unde est vero reiciendis facilis laudantium inventore voluptatum, neque laborum nam molestiae aperiam iste, deleniti illo perspiciatis nihil ipsa! Perspiciatis, consequatur?'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm mt-8'"
                :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae non fuga cum eius unde quam, cupiditate illum, debitis aut ea possimus earum veritatis vitae quisquam. Nulla quia mollitia quod? Eius quod blanditiis quam ex laborum dignissimos? Dolorum suscipit ratione corporis nam labore natus eos consectetur.'" 
            />
        </div>
    </x-frontend.c-section>
    <x-frontend.c-section class="bg-[#484848] rounded-xl mt-8 !mx-5 sm:!mx-auto" :gridGap="8">
        <x-frontend.c-header-lg
            :class="'text-white text-shadow-lg !text-center'" 
            :message="'Frequently Asked Questions'" 
        />
        <div x-data="{ open: null }" class="w-full max-w-4xl mx-auto">
            <!-- Question 1 -->
            <div class="border-y border-neutral-500 overflow-hidden">
                <button 
                    class="w-full text-left px-4 py-3 flex justify-between items-center cursor-pointer"
                    @click="open === 1 ? open = null : open = 1">
                    <span class="font-medium text-white text-lg lg:text-2xl">What is your refund policy?</span>
                    <span class="text-white lg:text-xl" x-show="open === 1">−</span>
                    <span class="text-white lg:text-xl" x-show="open !== 1">+</span>
                </button>
                <div x-show="open === 1" x-transition class="px-4 pb-3 text-neutral-200">
                    We offer a 30-day money-back guarantee for all purchases. No questions asked.
                </div>
            </div>
            <!-- Question 2 -->
            <div class="border-b border-neutral-500 overflow-hidden">
                <button 
                    class="w-full text-left px-4 py-3 flex justify-between items-center cursor-pointer"
                    @click="open === 2 ? open = null : open = 2">
                    <span class="font-medium text-white text-lg lg:text-2xl">How long does shipping take?</span>
                    <span class="text-white lg:text-xl" x-show="open === 2">−</span>
                    <span class="text-white lg:text-xl" x-show="open !== 2">+</span>
                </button>
                <div x-show="open === 2" x-transition class="px-4 pb-3 text-neutral-200">
                    Shipping typically takes 3–5 business days within the Philippines.
                </div>
            </div>
            <!-- Question 3 -->
            <div class="border-b border-neutral-500 overflow-hidden">
                <button 
                    class="w-full text-left px-4 py-3 flex justify-between items-center cursor-pointer"
                    @click="open === 3 ? open = null : open = 3">
                    <span class="font-medium text-white text-lg lg:text-2xl">Do you offer international delivery?</span>
                    <span class="text-white lg:text-xl" x-show="open === 3">−</span>
                    <span class="text-white lg:text-xl" x-show="open !== 3">+</span>
                </button>
                <div x-show="open === 3" x-transition class="px-4 pb-3 text-neutral-200">
                    Yes, we ship worldwide. Delivery times vary by destination.
                </div>
            </div>
        </div>
    </x-frontend.c-section> --}}
    <br>
    <br>
    <br>
</div>
</div>