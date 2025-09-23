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
                <div class="rounded-4xl bg-gradient-to-b from-[#8C1717] to-[#541111] relative">
                    <img
                        src="{{ asset('img/love-4.webp') }}" 
                        alt="Profile Picture"
                        class="w-full rounded-t-4xl h-56"
                    />
                    <br>
                    <x-frontend.c-header-md 
                        :class="'text-white text-shadow-lg p-8 lg:text-3xl text-center '" 
                        :message="'Start the Daily Tantric Breath'" 
                    />
                    <br>
                </div>
            @endfor
        </div>
    </x-frontend.c-section>
</x-frontend.c-section>
