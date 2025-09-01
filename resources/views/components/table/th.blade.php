<th {{ $attributes->merge(['class' => 'px-3 py-3.5 text-left text-sm font-bold']) }} scope="col">
    {{ $text ?? $slot }}
</th>