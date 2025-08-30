<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Carbon\Carbon;


new #[Layout('components.layouts.app')]
// #[Title('Universal Tantra | Booking')] 
class extends Component {
    public $currentMonth;
    public $currentYear;

    public function mount()
    {
        $this->currentMonth = now()->month;
        $this->currentYear = now()->year;
    }

    public function previousMonth()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth, 1)->subMonth();
        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
    }

    public function nextMonth()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth, 1)->addMonth();
        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
    }
}; ?>
@php
    $startOfMonth = Carbon::create($currentYear, $currentMonth, 1);
    $daysInMonth = $startOfMonth->daysInMonth;
    $firstDayOfWeek = $startOfMonth->dayOfWeek; // 0 = Sunday
    $monthName = $startOfMonth->format('F Y');
@endphp

<div class="pt-40 overflow-hidden relative">
    <x-frontend.c-bg1 :blur="true" />
    <div class="relative z-10">
        <x-frontend.c-section>
            <x-frontend.c-header-lg 
                :class="'text-header text-shadow-lg text-3xl lg:!text-6xl sm:!text-center'" 
                :message="'Book a Session'" 
            />
            <x-frontend.c-paragraph 
                :class="'text-neutral-200 text-shadow-sm !text-center max-w-2xl mx-auto'"
                :message="'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum fuga ex officiis! Eos, possimus. Eum laboriosam aspernatur eos perferendis sunt.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum fuga ex officiis! Eos, possimus. Eum laboriosam aspernatur eos perferendis sunt.'"
            />
        </x-frontend.c-section>
        <x-frontend.c-section :gridColumn="1" class="!py-5">
            <div class="flex flex-col lg:flex-row items-center relative gap-6 mt-16">
                <x-frontend.c-header-md
                    :class="'text-white text-shadow-lg'" 
                    :message="'Select Service'" 
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section class="!py-1">
            <div class="grid grid-cols-1 gap-3 lg:grid-cols-2 lg:gap-8">
                {{-- <--- Loop natin para hindi mahaba ---> --}}
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
                <a class="bg-[#8c1717] text-white flex items-center justify-between py-3 px-5 gap-5 rounded-md hover:cursor-pointer font-semibold hover:opacity-80 w-full text-2xl">
                    <div class="rounded-full h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            {{-- width="2rem"  --}}
                            height="2.5rem">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M10 8l4 4-4 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span>
                            Lorem Ipsum
                        </span>
                        <span class="text-sm font-light">
                            1 Hour
                        </span>
                    </div>
                    <div class=" bg-white text-[#8c1717] rounded-full h-10 flex items-center justify-center lg:ml-40">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            height="2.5rem">
                            {{-- <circle cx="12" cy="12" r="10"></circle> --}}
                            <path d="M9.09 9a3 3 0 1 1 3.91 2.83c-.45.18-.82.52-1 1v1"></path>
                            <line x1="12" y1="17" x2="12" y2="17"></line>
                        </svg>
                    </div>
                </a>
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section>
            <div>
                <x-frontend.c-paragraph 
                    :class="'text-neutral-200 text-shadow-sm mt-8'"
                    :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae non fuga cum eius unde quam, cupiditate illum, debitis aut ea possimus earum veritatis vitae quisquam. Nulla quia mollitia quod? Eius quod blanditiis quam ex laborum dignissimos? Dolorum suscipit ratione corporis nam labore natus eos consectetur.'" 
                />
            </div>
        </x-frontend.c-section>
            <x-frontend.c-section :gridColumn="1" class="!py-5">
            <div class="flex flex-col lg:flex-row items-center relative gap-6 mt-16">
                <x-frontend.c-header-md
                    :class="'text-white text-shadow-lg'" 
                    :message="'Select Date & Time'" 
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section :gridColumn="2" class="!py-1">
            <div class=" bg-[#8c1717] text-white rounded-2xl pb-3 text-3xl ">
                <div class="flex justify-between items-center mb-4 py-3  [box-shadow:rgba(0,0,0,0.25)_0px_54px_55px,rgba(0,0,0,0.12)_0px_-12px_30px,rgba(0,0,0,0.12)_0px_4px_6px,rgba(0,0,0,0.17)_0px_12px_13px,rgba(0,0,0,0.09)_0px_-3px_5px] ">
                    <button wire:click="previousMonth" class="px-3 py-1 rounded font-bold hover:bg-[#0505048b] cursor-pointer">&lt;</button>
                        <h2 class="font-bold uppercase">{{ $monthName }}</h2>
                    <button wire:click="nextMonth" class="px-3 py-1 rounded font-bold hover:bg-[#0505048b] cursor-pointer">&gt;</button>
                </div>
                <!-- Weekday headers -->
                <div class="p-2">
                    <div class="grid grid-cols-7 text-center font-semibold pb-2 text-[#fbb836] text-xl">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <!-- Calendar days -->
                    <div class="grid grid-cols-7 gap-2 mt-2  text-center">
                        <!-- Blank cells before the first day -->
                        @for ($i = 0; $i < $firstDayOfWeek; $i++)
                            <div></div>
                        @endfor
        
                        <!-- Actual days -->
                        @for ($day = 1; $day <= $daysInMonth; $day++)
                            <div class=" p-2 font-bold text-xl  rounded-xl hover:bg-[#0505048b] cursor-pointer">
                                {{ $day }}
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <x-frontend.c-section class="!pb-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-8">
                    <x-frontend.c-button 
                        :class="'bg-[#8c1717] rounded-md'"
                        :text="'9:00 AM'"
                    />
                    <x-frontend.c-button 
                        :class="'bg-[#8c1717] rounded-md'"
                        :text="'10:00 AM'"
                    />
                    <x-frontend.c-button 
                        :class="'bg-[#8c1717] rounded-md'"
                        :text="'$11:00 AM'"
                    />
                    <x-frontend.c-button 
                        :class="'bg-[#8c1717] rounded-md'"
                        :text="'1:00 AM'"
                    />
                    <x-frontend.c-button 
                        :class="'bg-[#8c1717] rounded-md'"
                        :text="'2:00 AM'"
                    />
                    <x-frontend.c-button 
                        :class="'bg-[#8c1717] rounded-md'"
                        :text="'3:00 AM'"
                    />
                </div>
            </x-frontend.c-section>
        </x-frontend.c-section>
            <x-frontend.c-section :gridColumn="1" class="!py-5">
            <div class="flex flex-col lg:flex-row items-center relative gap-6 mt-16">
                <x-frontend.c-header-md
                    :class="'text-white text-shadow-lg'" 
                    :message="'Add your details'" 
                />
            </div>
        </x-frontend.c-section>
        <x-frontend.c-section :gridColumn="2" class="!py-1">
            <form action="">
                <div class="grid gap-2  max-w-sm">
                    <x-frontend.c-input 
                        :placeholder="'Full Name'"
                        :id="'full-name'"
                    />
                    <x-frontend.c-input 
                        :placeholder="'Contact No.'"
                        :id="'contact-number'"
                    />
                    <x-frontend.c-input 
                        :placeholder="'Email'"
                        :id="'email'"
                        :type="'email'"
                    />
                </div>
            </form>
        </x-frontend.c-section>
        <br>
        <br>
        <br>
    </div>
</div>
</div>