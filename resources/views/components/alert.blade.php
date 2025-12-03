@props(['type', 'message'])

{{-- accessing messages using session-helper --}}

@if(session()->has($type))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show"
class="p-4 nb-4 text-sm text-white rounded {{ $type == 'succes' ? 'bg-red-500' : 'bg-green-500'  }}">
    {{ $message }}
</div>
@endif