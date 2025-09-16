<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Initiations')] 
class extends Component {
    //
}; ?>

<div class="pt-20 relative overflow-hidden">
    <x-frontend.c-bg :blur="true"/>
        <x-frontend.c-section class="my-56">
            <x-frontend.c-header-lg 
                :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
                :message="'Enter the Fire'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm !text-center max-w-4xl mx-auto'"
                :message="'Universal Tantra initiations are not performances — they are living rituals designed to re-write your relationship with breath, touch, and presence. Through ceremonies, guided practices, and embodied encounters, you are invited to step across the threshold: from story into sensation, from identity into essence. This is not a comfort zone. It’s an initiation into clarity, sovereignty, and devotion.'"
            />
        </x-frontend.c-section>
</div>
