<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Event;
use Livewire\WithPagination;


new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Events')] 
class extends Component {

    use WithPagination;

    //
    public function with(): array
    {
        return [
            'events' => $this->loadEvent(),
        ];
    }
    public function loadEvent()
    {
        return Event::where('date', '>=', date('Y-m-d'))->orderBy('date', 'desc')->paginate(10);
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
                            src="{{$event->img_path}}" 
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
                            :class="'text-white text-shadow-sm mt-2 h-24 overflow-y-auto custom-scrollbar'"
                            :message="$event->description"
                        />
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-row items-center justify-center gap-2 lg:gap-20 px-5 mt-10">
            {{-- Prev Button --}}
            <button
                wire:click="previousPage"
                wire:loading.attr="disabled"
                class="bg-[#8c1717] p-2 px-6 text-white rounded-md disabled:bg-[#380e0e]"
                @if ($events->onFirstPage()) disabled @endif
            >
                Prev Page
            </button>

            {{-- Page Info --}}
            <span class="text-white">
                Page {{ $events->currentPage() }} of {{ $events->lastPage() }}
            </span>

            {{-- Next Button --}}
            <button
                wire:click="nextPage"
                wire:loading.attr="disabled"
                class="bg-[#8c1717] p-2 px-6 text-white rounded-md disabled:bg-[#380e0e]"
                @if (!$events->hasMorePages()) disabled @endif
            >
                Next Page
            </button>
        </div>
    </x-frontend.c-section>
</div>
