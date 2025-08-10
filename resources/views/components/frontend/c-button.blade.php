<button 
    href="{{ $link ?? '#' }}" 
    {{ $attributes->merge([
            'class' => "text-white text-2xl rounded-full py-3 hover:cursor-pointer"
        ]) 
    }}
>
    {{ $text }}
</button>