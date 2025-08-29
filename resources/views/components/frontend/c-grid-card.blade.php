<div class="grid lg:grid-cols-2 gap-8 {{ $maxWidth ?? '' }}" style="color: {{ $color ?? '#ffffff' }};">
    @foreach ($contets as $content)
        <div 
            class="p-8 rounded-2xl text-center {{ $bgColor ?? '' }} 
                @if ($loop->last && count($contets) % 2 !== 0) lg:col-span-2 lg:max-w-xl lg:mx-auto @endif"
            style="border: 3px solid {{ $color ?? '#ffffff' }};"
        >
            <p class="font-bold text-2xl mb-2 {{ $titleClass ?? '' }}">{{ $content['title'] }}</p>
            <x-frontend.c-paragraph 
                class="{{ $paragraphClass ?? '' }}"
                :message="$content['description']"
            />
        </div>
    @endforeach
</div>
