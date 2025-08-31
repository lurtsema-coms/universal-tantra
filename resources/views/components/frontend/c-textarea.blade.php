<div class="{{ $textareaSectionClass ?? '' }}">
    <label for="{{ $id }}" class="text-white {{ $labelClass ?? '' }}">{{ $label ?? '' }}</label>
    <textarea 
        id="{{ $id }}"
        {{ $attributes->merge(['class' => 'py-3 w-full px-5 bg-white rounded-md']) }}
    ></textarea>
</div>
