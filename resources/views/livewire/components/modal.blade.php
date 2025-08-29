<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {

    public $isShown = false;
    public $maxWidth = 'lg';
    public $title = '';
    public $subHeader = '';
    public $descriptions = [];
    
    #[On('open-modal')] 
    public function openModal() {
        $this->isShown = true;
    }
}; ?>

<div class="relative z-40">
    <div class="fixed inset-0 bg-gray-900/60 z-40">
        <div class="flex h-full w-full p-10 overflow-auto">
            <div class="w-full max-w-{{$maxWidth}} border border-gray-100/10 p-10 bg-gray-800 rounded-lg m-auto">
                <x-frontend.c-rounded-img 
                    src="{{ asset('img-icon/t-and-c.png') }}" 
                    alt="Profile Picture"
                    divImgClass="mx-auto"
                    borderWidth="4"
                    borderGradient="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500"
                    imgClass="object-cover"
                    imgMaxWidth="50px"
                />
                <br>
                @if (!empty($title))             
                <x-frontend.c-header-md 
                    :class="'text-white text-shadow-lg text-center'" 
                    :message="$title"
                />
                @endif
                @if (!empty($subHeader))             
                <x-frontend.c-paragraph
                    :class="'text-white/70 text-shadow-lg text-center'" 
                    :message="$subHeader"
                />
                @endif
                <br>
                @if (!empty($descriptions))
                    @foreach ($descriptions as $description)                  
                        <x-frontend.c-paragraph
                            :class="'text-white/70 text-shadow-lg text-center not-last:mb-4'" 
                            :message="$description"
                        />
                    @endforeach             
                @endif
                <div class="grid grid-cols-2 gap-4 mt-8 max-w-xl mx-auto">
                    <x-frontend.c-button class="!py-4 w-full bg-gradient-to-b bg-gray-100 !text-black/80" text="Cancel" />
                    <x-frontend.c-button class="!py-4 w-full bg-gradient-to-b bg-sky-600" text="I Agree" />
                </div>
            </div>
        </div>
    </div>
</div>
