<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Event;

new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Events')] 
class extends Component {
    //
    public function with(): array
    {
        return [
            'events' => $this->loadEvent(),
        ];
    }
    public function loadEvent()
    {
        // dd(Event::where('date', '>=', date('Y-m-d'))->get());
        return Event::where('date', '>=', date('Y-m-d'))->get();
    }
}; ?>

<div class="pt-25 sm:pt-40 relative overflow-hidden">
    <x-frontend.c-bg :blur="true"/>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-lg
            :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
            :message="'Events'" 
        />
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mt-1 mx-auto w-full">
            @foreach ($events as $event)                
                <div>
                    <div class="h-65">
                        <img 
                            src="{{ asset('img/meeting.webp') }}" 
                            alt="meeting" 
                            class="object-cover h-full w-full" 
                            loading="lazy" 
                            decoding="async"
                        />
                    </div>
                    <div class="bg-[#8C1717] p-6">
                        <x-frontend.c-header-md 
                            :class="'text-white text-shadow-lg'" 
                            :message="$event->title" 
                        />
                        <x-frontend.c-paragraph 
                            :class="'text-white text-shadow-sm'"
                            :message="date('F j, Y', strtotime($event->date))"
                        />
                        <x-frontend.c-paragraph 
                            :class="'text-white text-shadow-sm mt-2'"
                            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quae atque sint laboriosam! Delectus, perspiciatis!'"
                        />
                    </div>
                </div>
            @endforeach
        </div>
    </x-frontend.c-section>
</div>
