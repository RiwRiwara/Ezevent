@props([
    'id' => '',
    'name' => '',
    'options' => [],
    'filters' => []
])

<select id="{{ $id }}" name="{{ $name }}" onchange="submitFormFilter()" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $filters[$name]['selected'] == $value ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</select>
