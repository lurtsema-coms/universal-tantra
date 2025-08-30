<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="pt-20 relative overflow-hidden">
    <x-frontend.c-bg :blur="true"/>
    <x-frontend.c-section class="my-28">
        <x-frontend.c-header-lg
            :class="'text-header text-shadow-lg !text-center text-3xl lg:!text-6xl'" 
            :message="'This gate is false.'" 
        />
        <x-frontend.c-header-lg
            :class="'text-header text-shadow-lg !text-center text-3xl lg:!text-6xl'" 
            :message="'Return to breath.'" 
        />
    </x-frontend.c-section>
</div>
