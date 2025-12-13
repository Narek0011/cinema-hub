@props(['text', 'type' => 'primary', 'href' => '#'])
<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => "btn btn-{$type}"]) }}
>
    {{ $text }}
</a>
