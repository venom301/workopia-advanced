@props(['id', 'name', 'label' => null, 'type' => 'text', 'value' => '', 'placeholder' => '', 'options' => []])
{{-- created props for select, use options as associative array and loop through --}}

<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <select id="{{ $id }}" name="{{ $name }}" class="w-full px-4 py-2 border rounded focus:outline-none @error($name)
        border-red-500
    @enderror">
    @foreach ( $options as $optionsValues => $optionLabel )
    <option value="full-time {{ old($name, $value) == $optionsValues ? 'selected' : '' }}">
           {{$optionLabel}}
        </option>
    @endforeach
    </select>
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>