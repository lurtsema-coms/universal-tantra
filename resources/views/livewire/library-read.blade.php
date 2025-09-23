<x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'Scriptures of Skin & Spirit'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'Essays, poems, and writings on Universal Tantra. Each word is an altar — a reminder that breath, touch, and desire are sacred language.'"
        />
        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-5 gap-y-10 !py-10">
            @for ($i=0; $i<4; $i++)                
                <div class="rounded-4xl bg-gradient-to-b from-[#8C1717] to-[#541111] relative cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img
                        src="{{ asset('img/love-4.webp') }}" 
                        alt="Profile Picture"
                        class="w-full rounded-t-4xl h-56"
                    />
                    <div class="px-8 mt-5">
                        <span class="uppercase font-garamond text-white">November 17 2020</span>
                        <x-frontend.c-header-md 
                            :class="'text-white text-shadow-lg  lg:text-3xl  '" 
                            :message="'Start the Daily Tantric Breath'" 
                        />
                        <x-frontend.c-paragraph 
                            :class="' text-white '"
                            :message="
                                'Sign up for our free breathing altar-30seconds of ritual delivered every morning'
                            " 
                        />
                        <br>
                    </div>
                </div>
            @endfor
        </div>
    </x-frontend.c-section>
</x-frontend.c-section>
