<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Shop')] 
class extends Component {
    //
}; ?>

<div class="pt-20 relative overflow-hidden">
    <x-frontend.c-bg :blur="true"/>
        <x-frontend.c-section class="my-25">
            <x-frontend.c-header-lg 
                :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
                :message="'Tools for Ritual, Anchors for Presence '" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm !text-center max-w-4xl mx-auto'"
                :message="'From guided practices to sacred objects, the Universal Tantra shop offers resources to deepen your path. Each item is chosen not as decoration, but as doorway — to remind you of the altar within your own skin.'"
            />
            <div class="flex">
                <x-frontend.c-button class="!text-black mx-auto mt-8 w-full max-w-76 bg-gradient-to-b from-[#FEBB37] to-[#FF8400]" text="Browse The Shop" />
            </div>
        </x-frontend.c-section>
</div>
