<section class="{{ $cardClass ?? ''}}">
    <div {{ $attributes->merge(['class' => 'py-10 sm:py-15 max-w-3xl lg:max-w-5xl mx-auto px-5']) }}>
        <div class="grid lg:grid-cols-{{ $gridColumn ?? 1 }} gap-{{ $gridGap ?? 16 }}">
            {{ $slot }}
        </div>
    </div>
</section>