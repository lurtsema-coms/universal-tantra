@props([
    'first' => false,
    'last' => false,
    'text' => null,
])

<td
    {{ $attributes->merge([
        'class' => implode(' ', array_filter([
            'py-4 text-sm',
            $first ? 'pr-3 pl-4 sm:pl-6' : null,
            $last ? 'pr-4 pl-3 text-right font-medium sm:pr-6' : null,
            (!$first && !$last) ? 'px-3' : null,
        ]))
    ]) }}
>
    <!-- 
        Add an inner <div> wrapper and apply the line-clamp class here.
        This resolves conflicts with how <td> elements handle overflow.
    -->
    <div class="line-clamp-2 min-w-40 max-w-sm">
        @if ($text)
            {{ $text }}
        @else
            {{ $slot }}
        @endif
    </div>
</td>
