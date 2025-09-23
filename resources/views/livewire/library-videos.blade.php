<x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'Awaken Through Sight'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'A library of sacred transmissions — teachings, rituals, and embodied practices captured in living motion. Watch, feel, and let presence move through you.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class=" !py-5">
        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-5 ">
            @for ($i=0; $i<2; $i++)                
                <div
                    wire:key="library-video-{{ $i }}"
                    x-data="{ playing: true }" 
                    class="relative w-full h-85  overflow-hidden border-5 border-[#541111]"
                >
                    <!-- Video -->
                    <video 
                        x-ref="video"
                        class="w-full h-full object-cover object-[center_52%]" 
                        autoplay 
                        muted 
                        loop 
                        playsinline
                        wire:ignore
                    >
                        <source src="{{ asset('video/vajra_bell.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <!-- Play/Pause Button -->
                    <button 
                        @click="
                            if (playing) { $refs.video.pause(); } 
                            else { $refs.video.play(); }
                            playing = !playing
                        "
                        class="absolute inset-0 flex items-center justify-center text-white text-5xl bg-black/40 hover:bg-black/60 transition rounded-full w-20 h-20 m-auto"
                    >
                        <template x-if="!playing">
                            <!-- Play icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10" viewBox="0 0 16 16">
                                <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l4.5-2.5a.5.5 0 0 0 0-.814l-4.5-2.5z"/>
                            </svg>
                        </template>
                        <template x-if="playing">
                            <!-- Pause icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10" viewBox="0 0 16 16">
                                <path d="M5.5 3.5A.5.5 0 0 1 6 4v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm5 0A.5.5 0 0 1 11 4v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </template>
                    </button>
                </div>
            @endfor
        </div>
    </x-frontend.c-section>
</x-frontend.c-section>
