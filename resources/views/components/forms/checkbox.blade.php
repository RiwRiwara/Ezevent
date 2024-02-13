@props([
'name' => 'input',
'id' => null,
'placeholder' => null
])
<div class="flex items-center ps-3">
    <input 
    id="{{$id ?? $name}}" 
    name="{{$name}}" 
    type="checkbox" 
    value="" 
    class="w-4 h-4 text-primary-4
    bg-gray-100 border-gray-6 rounded focus:ring-primary-4
    dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 
    focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
</div>