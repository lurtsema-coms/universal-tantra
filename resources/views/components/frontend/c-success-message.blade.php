@props([
    'class' => '',
    'hasTimer' => false,
])

@if (session()->has('message'))
    <div 
        x-data="{ show: true }" 
        x-show="show" 
        x-init="
            @if ($hasTimer)
                setTimeout(() => show = false, 5000)
            @endif
        "
        x-transition
        {{ $attributes->merge(['class' => $class . ' text-green-400']) }}
    >
        {{ session('message') }}
    </div>
@endif
