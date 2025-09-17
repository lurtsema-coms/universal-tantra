<x-frontend.c-section>
    <x-frontend.c-section class="relative z-10">
        <x-frontend.c-header-md 
            :class="'text-header text-shadow-lg text-4xl'" 
            :message="'Breathe Into Sound'" 
        />
        <br>
        <x-frontend.c-paragraph 
            :class="'text-neutral-200 text-shadow-sm'"
            :message="'Guided breathwork, meditations, and sonic rituals for your daily practice. Close your eyes, open your body, and listen as devotion becomes vibration.'"
        />
    </x-frontend.c-section>
    <x-frontend.c-section class="!py-0">
        <div class="z-10 w-full">
            @for ($i=0; $i<3; $i++)                
                <div
                    :class='"mb-10 mt-12 flex flex-col items-center justify-center rounded-md px-5  md:h-[18rem] md:flex-row"'
                >
                    <img src="{{ asset('img/love-5.webp') }}" alt="Image" class="h-full w-full rounded-t-lg md:max-w-md md:rounded-t-none lg:rounded-l-lg" />
                    <div
                        :class='"w-full border-2 border-[#A23636] bg-gradient-to-b from-[#8C1717] to-[#541111] p-6 text-white sm:flex sm:h-full shadow-md  sm:flex-col md:max-w-[36rem] md:rounded-b-none lg:rounded-r-lg"'
                    >
                        <div class="flex-1">
                            <span class="mb-1 block text-center text-[1.5rem] font-bold">Breathe Into Sound</span>
                            <x-frontend.c-paragraph 
                                :class="'text-neutral-200 text-shadow-sm'"
                                :message="'Guided breathwork, meditations, and sonic rituals for your daily practice. Close your eyes, open your body, and listen as devotion becomes vibration.'"
                            />
                        </div>
                        <div class="mt-5 rounded">
                            <audio controls class="w-full">
                                <source :src="" type="audio/mpeg" />
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div>
                </div>
            @endfor
            <div class="flex flex-row items-center justify-center gap-20 px-5 mt-4">
                <button
                    class="bg-[#8c1717] p-2 text-white rounded-md disabled:bg-[#00457a92]"
                    :disabled="" 
                    >
                    Previous
                </button>
                
                <span class="text-gray-500">
                    Page 
                </span>
                
                <button
                    class="bg-[#8c1717] p-2 text-white rounded-md disabled:bg-[#00457a92]"
                    :disabled="" 
                    >
                    Next
                </button>
            </div>
        </div>
    </x-frontend.c-section>    
</x-frontend.c-section>