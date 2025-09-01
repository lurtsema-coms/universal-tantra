@if(!empty($link))
    <a 
        href="{{ $link }}" 
        wire:navigate
        {{ $attributes->merge([
            'class' => 'text-center font-bold rounded-md shadow-sm py-2.5 px-6 hover:cursor-pointer inline-block hover:opacity-80'
        ]) }}
    >
        {{ $text }}
    </a>
@else
    <button
        type="{{ $type ?? 'button' }}"
        {{ $attributes->merge([
            'class' => 'rounded-md shadow-sm py-2.5 px-6 hover:cursor-pointer font-bold hover:opacity-80'
        ]) }}
    >
        {{ $text ?? $slot }}
    </button>
@endif
