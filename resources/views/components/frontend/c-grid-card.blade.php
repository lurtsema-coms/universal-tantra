<div class="grid lg:grid-cols-2 gap-8 text-[{{ $color ?? '#ffffff' }}] {{ $maxWidth ?? '' }}">
    @foreach ($contets as $content)
        <div 
            class="p-8 rounded-2xl text-center border-3 border-[{{ $color }}] {{ $bgColor ?? '' }} 
                @if ($loop->last && count($contets) % 2 !== 0) lg:col-span-2 lg:max-w-xl lg:mx-auto @endif"
        >
            <p class="font-bold text-2xl mb-2">{{ $content['title'] }}</p>
            <x-frontend.c-paragraph 
                :message="$content['description']"
            />
        </div>
    @endforeach
</div>
