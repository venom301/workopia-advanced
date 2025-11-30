@props(['url' => '/', 'icon' => null, 'byclass' => 'bg-yellow-500', 'hoverclass' => 'hover:bg-yellow-600', 'textclass' => 'text-black', 'block' => false])

<a href="{{ url($url) }}"
    class="{{ $byclass }} {{ $hoverclass }} {{ $textclass }} px-4 py-2 rounded hover:shadow-md transition duration-300 flex items-center {{ $block ? 'block w-full' : '' }}">
    @if($icon)
        <i class="fa {{ $icon }} mr-2"></i>
    @endif
    {{ $slot }}
</a>