<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Shop')] 
class extends Component {
    
}; ?>

<div>
    <x-frontend.c-header-md
        :message="'Shop'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Your shop gives you full control to manage items, track purchases, and streamline transactions, making it simple to offer products and services to your users.
            '
        " 
    />
</div>
