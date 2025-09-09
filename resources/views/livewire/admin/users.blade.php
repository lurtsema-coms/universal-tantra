<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Users')] 
class extends Component {
    
}; ?>

<div>
    <x-frontend.c-header-md
        :message="'Users'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                dasdsadasdasd users.
            '
        " 
    />
</div>
