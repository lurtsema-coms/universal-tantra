@props(['target' => null, 'color' => 'text-white', 'size' => 'h-6 w-6'])

<svg 
    wire:loading 
    @if($target) wire:target="{{ $target }}" @endif
    class="animate-spin {{ $size }} {{ $color }}" 
    xmlns="http://www.w3.org/2000/svg" 
    fill="none" 
    viewBox="0 0 24 24"
>
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <circle class="opacity-75" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" stroke-dasharray="80" stroke-dashoffset="60"></circle>
</svg>