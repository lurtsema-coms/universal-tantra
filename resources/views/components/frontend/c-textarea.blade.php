@props([
    'label' => '',
    'labelClass' => '',
    'id' => '',
    'error' => null,
    'placeholder' => '',
    'isRequired' => false,
])

@php
    $textareaClasses = 'mt-2 py-3 w-full px-5 bg-white rounded-md placeholder:text-neutral-500 text-neutral-500';
    if ($error) {
        $textareaClasses .= ' border-2 border-red-500';
    }
@endphp

<div class="{{ $textareaSectionClass ?? '' }}">
    <label for="{{ $id }}" class="text-white {{ $labelClass }}">
        {{ $label }}
        @if($isRequired)
            <x-frontend.c-required />
        @endif
    </label>

    <textarea 
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => $textareaClasses]) }}
    ></textarea>

    {{-- Display the error message below the textarea --}}
    @if ($error)
        <p class="mt-1 text-red-500 text-sm">{{ $error }}</p>
    @endif
</div>
