@props([
    'first' => false,
    'last' => false,
    'text' => null,
])

<td
    {{ $attributes->merge([
        'class' => implode(' ', array_filter([
            'py-4 text-sm whitespace-nowrap',
            $first ? 'pr-3 pl-4 sm:pl-6' : null,
            $last ? 'pr-4 pl-3 text-right font-medium sm:pr-6' : null,
            (!$first && !$last) ? 'px-3' : null,
        ]))
    ]) }}
>
    @if ($text)
        {{ $text }}
    @else
        {{ $slot }}
    @endif
</td>