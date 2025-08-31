<div class="flex items-center gap-2">
    <input type="{{ $type ?? 'checkbox' }}" {{ $attributes->merge(['class' => 'my-2 h-5 w-5 bg-white rounded-md']) }}>
    <label for="{{ $id }}" class="select-none relative -top-[.5px] text-white {{ $labelClass ?? '' }}">{{ $label ?? '' }}</label>
</div>