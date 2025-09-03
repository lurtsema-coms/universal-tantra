@props([
    'label' => '',
    'labelClass' => '',
    'id' => '',
    'error' => null,
    'placeholder' => '',
    'type' => 'text',
    'isRequired' => false,
])

@php
    $inputClasses = 'my-2 w-full h-11 px-5 bg-white rounded-md';
    if ($error) {
        $inputClasses .= ' border-2 border-red-500';
    }
@endphp

<div class="{{ $inputSectionClass ?? 'w-full' }}">
    <label for="{{ $id }}" class="text-white {{ $labelClass }}">
        {{ $label }}
        @if($isRequired)
            <x-frontend.c-required />
        @endif
    </label>

    <input 
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $inputClasses . ' placeholder:text-neutral-500 text-neutral-500']) }}
    >

    {{-- Display the error message below the input --}}
    @if ($error)
        <p class="mt-1 text-red-500 text-sm">{{ $error }}</p>
    @endif
</div>