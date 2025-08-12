<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Donate')] 
class extends Component {
    //
}; ?>

<div class="pt-20">
    <x-frontend.c-section>
        <x-frontend.c-header-lg 
            :class="'text-[#fbb836] text-shadow-lg sm:!text-center'" 
            :message="'Feed the Fire'" 
        />
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm !text-center max-w-2xl mx-auto'"
            :message="'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum fuga ex officiis! Eos, possimus. Eum laboriosam aspernatur eos perferendis sunt.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section :gridColumn="2">
        <div>
            <x-frontend.c-header-lg 
                :class="'text-white text-shadow-lg text-left sm:text-center'" 
                :message="'A Pulse Beneath the Pavement'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm'"
                :message="
                    'You know that flutter behind the breastbone, a soft flare of heat that arrives uninvited, just 
                    before your mind quiets and something opens. That\'s Tantra—not yoga-class meditation, but the 
                    liturgy of living skin. Universal Tantra invites you into your body, not out of it. We call that 
                    pulse God. Goddess, Love, Life—but there, we let touch, breath, and ritual speak.'
                " 
            />
        </div>
        <div class="mt-16 lg:mt-0 flex justify-center lg:justify-end">
            <x-frontend.c-rounded-img />
        </div>
    </x-frontend.c-section>
    <x-frontend.c-section class="!pb-0">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <x-frontend.c-button 
                :class="'bg-[#8c1717] rounded-md'"
                :text="'$5000'"
            />
            <x-frontend.c-button 
                :class="'bg-[#8c1717] rounded-md'"
                :text="'$2500'"
            />
            <x-frontend.c-button 
                :class="'bg-[#8c1717] rounded-md'"
                :text="'$1000'"
            />
            <x-frontend.c-button 
                :class="'bg-[#8c1717] rounded-md'"
                :text="'$500'"
            />
            <x-frontend.c-button 
                :class="'bg-[#8c1717] rounded-md'"
                :text="'$250'"
            />
            <x-frontend.c-button 
                :class="'bg-[#8c1717] rounded-md'"
                :text="'$100'"
            />
            <div class="col-span-2 bg-[#8c1717] rounded-md flex items-center gap-8 px-8">
                <span class="text-white text-2xl">$</span>
                <x-frontend.c-input 
                    :inputSectionClass="'w-full'"
                    :class="'text-2xl'"
                    :placeholder="'Other Amount'"
                    :id="'donate-amount'"
                />
            </div>
        </div>
        <div class="flex flex-col lg:flex-row items-center relative gap-6 mt-16">
            <x-frontend.c-header-md
                :class="'text-white text-shadow-lg'" 
                :message="'Choose Payment'" 
            />
            <div class="mb-4 sm:mb-0">
                <x-frontend.c-button 
                    :class="'bg-white px-10 mr-4'"
                >
                    <img class="max-w-26" src="{{ asset('img/paypal.png') }}" alt="PayPal">
                </x-frontend.c-button>
                <x-frontend.c-button 
                    :class="'bg-white px-10'"
                >
                    <img class="max-w-20" src="{{ asset('img/visa.png') }}" alt="Visa">
                </x-frontend.c-button>
            </div>
        </div>
    </x-frontend.c-section>
    <x-frontend.c-section>
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
    </x-frontend.c-section>
    <br>
    <br>
    <br>
</div>
</div>