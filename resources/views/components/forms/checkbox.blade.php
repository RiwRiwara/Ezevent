@props([
'name' => 'input',
'id' => null,
'label' => null
])
<div class="flex items-center p-2 m-2 bg-neutral-0 shadow-sm hover:bg-neutral-1 " >
    <input 
        id="{{ $id ?? $name }}" 
        name="{{ $name }}" 
        type="checkbox" 
        class="checkbox-input text-neutral-6 bg-gray-0 border-neutral-8 rounded focus:ring-primary-5 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
    <label 
        for="{{ $name }}" 
        class="checkbox-label ml-2 text-sm font-medium text-gray-9 dark:text-gray-6">
        {{ $label ?? $name }}
    </label>
</div>
