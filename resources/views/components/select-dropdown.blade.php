@props([
    'id' => null,
    'name',
    'options' => [],
    'selected' => null,
    'placeholder' => 'Select an option',
])

<select id="{{ $id }}" name="{{ $name }}"
    {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) }}>

    <option disabled {{ $selected === null ? 'selected' : '' }}>
        {{ $placeholder }}
    </option>

    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ (old($name, $selected) == $value) ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach

</select>
