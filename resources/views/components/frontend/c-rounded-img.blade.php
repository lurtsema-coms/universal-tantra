@props([
    'imgClass' => '',
    'divImgClass' => '',
    'hasBorder' => false,
    'borderWidth' => 4,
    'borderGradient' => '',
    'imgMaxWidth' => null,
])

<div {{ $attributes->merge(['class' => $divImgClass]) }}>
    @if($hasBorder)
        <div 
            class="rounded-full inline-block {{ $borderGradient }} aspect-square"
            style="padding: {{ $borderWidth }}px;"
        >
            <img 
                src="{{ $attributes->get('src') ?? '' }}" 
                alt="{{ $attributes->get('alt') ?? '' }}" 
                class="rounded-full w-full h-full {{ $imgClass }}"
                @if($imgMaxWidth)
                    style="max-width: {{ $imgMaxWidth }};"
                @endif
            >
        </div>
    @else
        <img 
            src="{{ $attributes->get('src') ?? '' }}" 
            alt="{{ $attributes->get('alt') ?? '' }}" 
            class="rounded-full w-full h-full {{ $imgClass }}"
            @if($imgMaxWidth)
                style="max-width: {{ $imgMaxWidth }};"
            @endif
        >
    @endif
</div>
