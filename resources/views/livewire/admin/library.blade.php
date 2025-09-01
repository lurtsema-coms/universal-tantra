<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Library')] 
class extends Component {
    
}; ?>
<div>
    <x-frontend.c-header-md
        :message="'Library'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Manage your Videos, Audios, and Read materials with ease — add, delete, and view content anytime.
            '
        " 
    />
</div>
