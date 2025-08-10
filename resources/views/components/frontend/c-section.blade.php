<section class="{{ $cardClass ?? ''}}">
    <div {{ $attributes->merge(['class' => 'py-20 max-w-5xl mx-auto']) }}>
        <div class="grid grid-cols-{{ $gridColumn ?? 1 }} gap-{{ $gridGap ?? 8}}">
            {{ $slot }}
        </div>
    </div>
</section>