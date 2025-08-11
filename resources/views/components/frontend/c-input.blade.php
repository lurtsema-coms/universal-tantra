<div>
    <label for="{{ $id }}" class="text-white {{ $labelClass ?? '' }}">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? 'text' }}" {{ $attributes->merge(['class' => 'my-2 w-full h-11 px-5 bg-white rounded-md']) }}>
</div>