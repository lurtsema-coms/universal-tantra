<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Events')] 
class extends Component {
    //
}; ?>

<div class="pt-25 sm:pt-40 relative overflow-hidden">
    <x-frontend.c-bg :blur="true"/>
    <x-frontend.c-section>
        <x-frontend.c-header-lg
            :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
            :message="'Events'" 
        />
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mt-1 mx-auto w-full">
            @for ($index = 0; $index <4; $index++)                
                <div>
                    <div class="h-65 bg-slate-800">
                    </div>
                    <div class="bg-[#8C1717] p-6">
                        <x-frontend.c-header-md 
                            :class="'text-white text-shadow-lg'" 
                            :message="'Lorem ipsum dolor.'" 
                        />
                        <x-frontend.c-paragraph 
                            :class="'text-white text-shadow-sm'"
                            :message="'January 20, 2025'"
                        />
                        <x-frontend.c-paragraph 
                            :class="'text-white text-shadow-sm mt-2'"
                            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quae atque sint laboriosam! Delectus, perspiciatis!'"
                        />
                    </div>
                </div>
            @endfor
        </div>
    </x-frontend.c-section>
</div>
