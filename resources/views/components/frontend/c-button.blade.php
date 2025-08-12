@if(!empty($link))
    <a 
        href="{{ $link }}" 
        wire:navigate
        {{ $attributes->merge([
            'class' => 'text-white text-md text-center font-bold sm:text-2xl rounded-full py-3 hover:cursor-pointer inline-block hover:opacity-80'
        ]) }}
    >
        {{ $text }}
    </a>
@else
    <button
        type="button"
        {{ $attributes->merge([
            'class' => 'text-white text-md sm:text-2xl rounded-full py-3 hover:cursor-pointer font-bold hover:opacity-80'
        ]) }}
    >
        {{ $text ?? $slot }}
    </button>
@endif
