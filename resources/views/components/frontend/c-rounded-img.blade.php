@props([
    'imgClass' => '',
    'divImgClass' => '',
    'hasBorder' => false,
    'borderWidth' => 4,
    'borderGradient' => 'bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500',
    'imgMaxWidth' => null,
])

<div {{ $attributes->merge(['class' => $divImgClass]) }} 
     @if($imgMaxWidth) style="max-width: {{ $imgMaxWidth }};" @endif
>
    @if($hasBorder)
        <div class="rounded-full inline-block {{ $borderGradient }} aspect-square" 
             style="padding: {{ $borderWidth }}px;">
            <img 
                src="{{ $attributes->get('src') ?? '' }}" 
                alt="{{ $attributes->get('alt') ?? '' }}" 
                class="rounded-full w-full h-full {{ $imgClass }}"
            >
        </div>
    @else
        <img 
            src="{{ $attributes->get('src') ?? '' }}" 
            alt="{{ $attributes->get('alt') ?? '' }}" 
            class="rounded-full w-full h-full {{ $imgClass }}"
        >
    @endif
</div>
