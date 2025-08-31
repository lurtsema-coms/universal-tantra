@props([
    'label' => '',
    'labelClass' => '',
    'id' => '',
    'error' => null,
    'placeholder' => '',
    'type' => 'text'
])

@php
    $inputClasses = 'my-2 w-full h-11 px-5 bg-white rounded-md';
    if ($error) {
        $inputClasses .= ' border-2 border-red-500';
    }
@endphp

<div class="{{ $inputSectionClass ?? 'w-full' }}">
    <label for="{{ $id }}" class="text-white {{ $labelClass ?? '' }}">{{ $label ?? '' }}</label>
    <input 
        placeholder="{{ $placeholder }}"
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => $inputClasses]) }}
    >
    
    {{-- Display the error message below the input --}}
    @if ($error)
        <p class="mt-1 text-red-500 text-sm">{{ $error }}</p>
    @endif
</div>
