<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;


new #[Layout('components.layouts.app')]
#[Title('Universal Tantra | Library')] 
class extends Component {
    #[Url]
    public string $filter = 'view';
}; ?>

<div class="pt-25 sm:pt-40 relative overflow-hidden">
    <x-frontend.c-bg1 :blur="true"/>
    <div class="relative z-10">
        <x-frontend.c-section>
            <x-frontend.c-header-lg 
                :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
                :message="'Library'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm !text-center max-w-4xl mx-auto'"
                :message="'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum fuga ex officiis! Eos, possimus. Eum laboriosam aspernatur eos perferendis sunt.'"
            />
        </x-frontend.c-section>
        <x-frontend.c-section class="!py-0 !max-w-3xl">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <x-frontend.c-button
                    wire:click="$set('filter', 'view')"
                    :class="$filter === 'view'
                        ? 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#8c1717] rounded-2xl sm:!text-[1.3rem]'
                        : 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#2A2A2A] rounded-2xl sm:!text-[1.3rem]'"
                >
                    View All
                </x-frontend.c-button>
                <x-frontend.c-button
                    wire:click="$set('filter', 'videos')"
                    :class="$filter === 'videos'
                        ? 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#8c1717] rounded-2xl sm:!text-[1.3rem]'
                        : 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#2A2A2A] rounded-2xl sm:!text-[1.3rem]'"
                >
                    <img class="max-w-6" src="{{ asset('img-icon/player.png') }}" alt="player" />
                    <span>Videos</span>
                </x-frontend.c-button>
                <x-frontend.c-button 
                    wire:click="$set('filter','audios')"
                    :class="$filter === 'audios'
                        ? 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#8c1717] rounded-2xl sm:!text-[1.3rem]'
                        : 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#2A2A2A] rounded-2xl sm:!text-[1.3rem]'"
                >
                    <img class="max-w-6" src="{{ asset('img-icon/sound.png') }}" alt="sound" />
                    <span>Audios</span>
                </x-frontend.c-button>
                <x-frontend.c-button 
                    wire:click="$set('filter','read')"
                    :class="$filter === 'read'
                        ? 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#8c1717] rounded-2xl sm:!text-[1.3rem]'
                        : 'flex items-center justify-center !font-semibold !font-raleway gap-4 bg-[#2A2A2A] rounded-2xl sm:!text-[1.3rem]'"
                >
                    <img class="max-w-6" src="{{ asset('img-icon/pen.png') }}" alt="pen" />
                    <span>Read</span>
                </x-frontend.c-button>
            </div>
        </x-frontend.c-section>
        <br>
        <div>
            @if ($filter === 'view'){
                <x-frontend.c-section>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 gap-y-10">
                        @for ($i=0; $i<4; $i++)                
                            <div class="rounded-4xl border-2 border-[#A23636] bg-gradient-to-b from-[#8C1717] to-[#541111] p-8 relative cursor-pointer transform transition-transform duration-300 hover:scale-105">
                                <img class="absolute right-8 top-0" src="{{ asset('img/not-saved.png') }}" alt="not-saved">
                                <x-frontend.c-rounded-img 
                                    src="{{ asset('img/UT-Logo.png') }}" 
                                    alt="Profile Picture"
                                    divImgClass="flex justify-center"
                                    borderWidth="4"
                                    borderGradient="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500"
                                    imgClass="object-cover"
                                    imgMaxWidth="200px"
                                />
                                <br>
                                <x-frontend.c-header-md 
                                    :class="'text-white text-shadow-lg lg:text-3xl text-center'" 
                                    :message="'Start the Daily Tantric Breath'" 
                                />
                                <br>
                                <x-frontend.c-paragraph 
                                    :class="'text-center text-white'"
                                    :message="
                                        'Sign up for our free breathing altar-30seconds of ritual delivered every morning'
                                    " 
                                />
                            </div>
                        @endfor
                    </div>
                </x-frontend.c-section>
            }
            @elseif ($filter === 'videos'){
                <livewire:library-videos/>
            }
            @elseif ($filter === 'audios'){
                <livewire:library-audios/>
            }
            @elseif ($filter === 'read'){
                <livewire:library-read/>
            }
            @endif
        </div>

    </div>
</div>
