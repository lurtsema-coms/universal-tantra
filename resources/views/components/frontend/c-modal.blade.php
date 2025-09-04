@props([
    'maxWidth' => 'lg',
    'title' => '',
    'subHeader' => '',
    'descriptions' => [],
    'canceled' => null,
    'confirmed' => null,
    'src' => null,
    'alt' => null,
    'textConfirm' => 'I Agree'
])

<div x-cloak {{ $attributes->merge(['class' => 'relative z-40']) }}>
    <div class="fixed inset-0 bg-gray-900/60 z-40">
        <div class="flex h-full w-full p-10 overflow-auto">
            <div class="w-full max-w-{{$maxWidth}} px-10 pb-10 border border-gray-100/10 bg-gray-800 rounded-lg m-auto">
                
                @if (!empty($src))
                    <x-frontend.c-rounded-img 
                        src="{{ $src }}" 
                        alt="{{ $alt }}"
                        divImgClass="flex justify-center pt-8"
                        borderWidth="4"
                        borderGradient="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500"
                        imgClass="object-cover"
                        imgMaxWidth="50px"
                    />
                @endif

                <br>

                @if($title)
                    <x-frontend.c-header-md class="text-white text-shadow-lg text-center" :message="$title"/>
                @endif

                @if($subHeader)
                    <x-frontend.c-paragraph class="text-white/70 text-shadow-lg text-center" :message="$subHeader"/>
                @endif

                <br>

                @if(!empty($descriptions))
                    @foreach($descriptions as $description)
                        <x-frontend.c-paragraph class="text-white/70 text-shadow-lg text-center not-last:mb-4" :message="$description"/>
                    @endforeach
                @endif

                <div class="grid grid-cols-2 gap-4 mt-8 max-w-xl mx-auto">
                    <!-- Cancel button -->
                    <x-frontend.c-button 
                        x-on:click="modal = false; {!! $canceled ?? '' !!}" 
                        class="!py-4 w-full bg-gray-100 !text-black/80" 
                        text="Cancel"
                    />

                    <!-- Confirm button -->
                    <x-frontend.c-button 
                        x-on:click="modal = false; {!! $confirmed ?? '' !!}" 
                        class="!py-4 w-full bg-sky-600" 
                        text="{{ $textConfirm }}"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
