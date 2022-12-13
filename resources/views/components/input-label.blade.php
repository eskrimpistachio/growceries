@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-md text-black']) }}>
    {{ $value ?? $slot }}
</label>
